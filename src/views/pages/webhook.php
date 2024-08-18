<?php

require_once '../vendor/autoload.php';
require_once __DIR__ . '/../../utils/common.php'; // Pour la connexion à la base de données

// Assurez-vous que la clé secrète est bien définie
$stripe_secret_key = "sk_test_51P6KxnDbDjUdn3et6EBa1XMRcdYF8raSWkn10focRMAzomNbTU3TKE01TXLYePoofyBzkpasa3MM8Aws4vYOXfEa00hoMtDOPJ";

\Stripe\Stripe::setApiKey($stripe_secret_key);

// Lire le contenu brut de la requête envoyée par Stripe
$input = @file_get_contents('php://input');
$event = null;

try {
    $event = \Stripe\Event::constructFrom(
        json_decode($input, true)
    );
} catch(\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400);
    exit();
}

// Handle the event
if ($event->type == 'checkout.session.completed') {
    $session = $event->data->object;

    // Récupérer les informations nécessaires
    $payment_id = $session->payment_intent;
    $amount = $session->amount_total; // Montant total en centimes
    $currency = $session->currency;
    $payment_status = $session->payment_status;
    $customer_email = $session->customer_details->email;

    // Sauvegarder dans la base de données
    $stmt = $pdo->prepare("INSERT INTO payments (stripe_payment_id, amount, currency, payment_status, customer_email) VALUES (:stripe_payment_id, :amount, :currency, :payment_status, :customer_email)");
    $stmt->execute([
        'stripe_payment_id' => $payment_id,
        'amount' => $amount,
        'currency' => $currency,
        'payment_status' => $payment_status,
        'customer_email' => $customer_email,
    ]);
}

// Répondre à Stripe pour confirmer la réception du webhook
http_response_code(200);

?>
