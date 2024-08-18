<?php

$page = "success";
$title = "Sweet Home";

require_once __DIR__ .'/../../utils/common.php';
require_once '../vendor/autoload.php';

ob_start(); ?>

<body>

    <h1>Exemple stripe</h1>
    <p>Merci pour votre paiement!</p>
</body>

<?php $page_content = ob_get_clean();