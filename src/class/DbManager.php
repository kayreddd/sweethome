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
}