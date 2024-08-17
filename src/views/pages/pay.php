<?php

$page = "pay";
$title = "Sweet Home";

require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <h1>Exemple stripe</h1>
    <form method="post" action="<?=PROJECT_FOLDER ?>www/?p=checkout">
        <p>Pain au chocolat</p>
        <p><strong>20.00€</strong></p>
        <button>Payer</button>
    </form>
</body>

<?php $page_content = ob_get_clean();