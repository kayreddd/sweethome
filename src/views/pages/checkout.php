<?php
$page = "checkout";
$title = "Sweet Home";

require_once __DIR__ . '/../../utils/common.php';
require_once '../vendor/autoload.php';

ob_start(); 

// Assure-toi que la session est démarrée
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Initialiser le panier
if (isset($_SESSION["cart"])) $cart = ($_SESSION["cart"]);

$stripe_secret_key = "sk_test_51P6KxnDbDjUdn3et6EBa1XMRcdYF8raSWkn10focRMAzomNbTU3TKE01TXLYePoofyBzkpasa3MM8Aws4vYOXfEa00hoMtDOPJ";
// $stripe_tax_key = "txr_1PoRUmDbDjUdn3etKAxlA7D5";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$line_items = [];

if (!empty($cart)) {
    foreach ($cart as $key => $row) {
        $line_items[] = [
            "quantity" => $row['quantity'],
            "price_data" => [
                "currency" => "eur",
                "unit_amount" => $row['price'] * 100,
                "product_data" => [
                    "name" => $row['name'],
                    'images' => [$row['image']]
                ]
            ]
        ];
    }

    $checkout_session = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "http://localhost:8888/sweethome/www/?p=success&session_id={CHECKOUT_SESSION_ID}",
        "cancel_url" => "http://localhost:8888/sweethome/www/?p=home",
        "locale" => "fr",
        "line_items" => $line_items
    ]);

    http_response_code(303);
    header("Location: " . $checkout_session->url);
} else {
    echo"Votre panier est vide. Veuillez ajouter des produits à votre panier";
}

?>

<?php $page_content = ob_get_clean(); ?>

// "line_items" => [
//     [
//         "quantity" => 1,
//         'tax_rates' => [$stripe_tax_key],
//         "price_data" => [
//             "currency" => "eur",
//             "unit_amount" => 20*100,
//             "product_data" => [
//                 "name" => "Pain au chocolat",
//                 'images' => ["aa"]
//             ]
//         ]
//     ] 
// ]