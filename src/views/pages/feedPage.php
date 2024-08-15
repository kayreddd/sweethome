<?php

$page = $_GET['p'];
$title = "Sweet Home";
$search = isset($_GET['search']) ? $_GET['search'] : '';

require_once __DIR__ . '/../../utils/common.php';
require_once __DIR__ . '/../../utils/init.php';

//appel de la fonction qui récup les info en bdd
$feedPage = $BDD->getFeedPageContentBDD($page);

// Filtrer les résultats en fonction du terme de recherche
if (!empty($search)) {
    $feedPage = array_filter($feedPage, function($product) use ($search) {
        return stripos($product['product_name'], $search) !== false;
    });
}

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <form method="get" action="">
        <input type="hidden" name="p" value="<?= htmlspecialchars($page) ?>">
        <div class="search_bar">
            <input type="text" name="search" class="searchTerm" placeholder="Rechercher" value="<?= htmlspecialchars($search)?>">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>

    <div class="product-feed-all">
        <?php foreach ($feedPage as $row) { ?>
            <div class="product-feed-bloc" >
                <div class="product-feed-img" onclick="location.href='<?=PROJECT_FOLDER ?>www/?p=individualProductPage&product=<?=$row['product_id']?>'"> <!-- ajout de l'url permettant d'aller sur individual page avec l'id du product -->
                    <img src="<?= PROJECT_FOLDER ?>src/images/<?php echo $row["product_img"] == "" ? "no_image.svg" : $row["product_img"] ?>" alt="" height="376.64" width="376.64">
                </div>
                <div class="product-feed-info">
                    <p><?php echo $row['product_name'] ?></p>
                    <p><?php echo $row['price'] ?>€</p>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

<?php $page_content = ob_get_clean();
