<?php

$page = $_GET['p'];
$title = "Sweet Home";

require_once __DIR__ .'/../../utils/common.php';
//appel de la fonction qui récup les info en bdd
$feedPage = $BDD->getFeedPageContentBDD($page);
ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <div class="product-feed-all">
        <?php foreach($feedPage as $row){?>
            <div class="product-feed-bloc">
                <div class="product-feed-img">
                    <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
                </div>
                <div class="product-feed-info">
                    <p><?php echo $row['product_name']?></p>
                    <p><?php echo $row['price']?>€</p>
                </div>
            </div>
        <?php }?>
    </div>
</body>

<?php $page_content = ob_get_clean();