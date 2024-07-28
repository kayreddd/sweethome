<?php

try {
    $dsn = 'mysql:host=localhost;dbname=sweethome;';
    $db = new PDO($dsn, 'root', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch (Exception $e) {
    die('Impossible de se connecter à la DB.');
}