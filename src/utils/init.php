<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

require_once __DIR__ . '../../utils/common.php';
require_once __DIR__ . '../../utils/db.php';

// Configuration du site
$existing_pages = ['home', 'personalizedServices', 'feedPage'];

// Les classes
require_once __DIR__ . '../../class/DbManager.php';


$BDD = new DbManager($db);


// Tous les utilitaires
require_once __DIR__ . '../../utils/error.php';