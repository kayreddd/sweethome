<?php

$page = "home";
$title = "Sweet Home";

require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <div class="img_home_page">
        <img src="<?=PROJECT_FOLDER ?>src/images/home_page_image.svg" alt="">
    </div>

    <div class="cta-button">
        <a href=""><button>Voir nos pâtisseries</button></a>
    </div>

    <div class="best-seller-title">
        <p>BEST SELLERS DE LA SEMAINE</p>
    </div>

    <div>
        <div class="scrollmenu">
            <a href="#"><img class="no-img-product" src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt=""></a>
            <a href="#"><img class="no-img-product" src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt=""></a>
            <a href="#"><img class="no-img-product" src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt=""></a>
            <a href="#"><img class="no-img-product" src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt=""></a>
            <a href="#"><img class="no-img-product" src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt=""></a>
            <a href="#"><img class="no-img-product" src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt=""></a>  
            <a href="#"><img class="no-img-product" src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt=""></a>
        </div>
    </div>
    <div>
        <div class="scrollmenu">
            realiser un deuxieme menu scroll avec baguette et le prix
        </div>
    </div>

    <div class="event-title">
        <p>LAISSEZ NOUS VOUS ACCOMPAGNER DANS <br>LA RÉALISATION DE VOS ÉVÉNEMENTS</p>
    </div>
</body>

<?php $page_content = ob_get_clean();