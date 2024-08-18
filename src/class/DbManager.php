<?php 

require_once __DIR__ . '../../utils/db.php';

class DbManager {
    private $db;
    //constructor nécessaire
    function __construct(PDO $db) {
        $this->db = $db;
    }
    
    //fonction qui récup toutes les infos de la page feedPage
    function getFeedPageContentBDD(string $product){
        $pdoStatement = $this->db->prepare('SELECT * FROM feed_page_content WHERE feed_pages = :feed_pages');
        $pdoStatement->bindParam(':feed_pages', $product);
        $pdoStatement->execute();
        return $pdoStatement->fetchAll();
    }

    function getProductContentBDD(string $productID){
        $pdoStatement = $this->db->prepare('SELECT * FROM feed_page_content WHERE product_id = :product_id');
        $pdoStatement->bindParam(':product_id', $productID);
        $pdoStatement->execute();
        return $pdoStatement->fetchAll();
    }

    function insertPaymentInfo(string $payment_id, float $amount, string $currency, string $payment_status, string $customer_email){
        $pdoStatement = $this->db->prepare('INSERT INTO payments (stripe_payment_id, amount, currency, payment_status, customer_email) VALUES (:stripe_payment_id, :amount, :currency, :payment_status, :customer_email)');
        $pdoStatement->bindParam(':stripe_payment_id', $payment_id, PDO::PARAM_STR);
        $pdoStatement->bindParam(':amount', $amount);
        $pdoStatement->bindParam(':currency', $currency, PDO::PARAM_STR);
        $pdoStatement->bindParam(':payment_status', $payment_status, PDO::PARAM_STR);
        $pdoStatement->bindParam(':customer_email', $customer_email, PDO::PARAM_STR);
        $pdoStatement->execute();
    }
    
}