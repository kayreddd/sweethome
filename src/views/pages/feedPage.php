<?php

$page = "home";
$title = "Sweet Home";

require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <div class="product-feed-all">
        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>

        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>

        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>
    </div>

    <div class="product-feed-all">
        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>

        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>

        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>
    </div>

    <div class="product-feed-all">
        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>

        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>

        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>
    </div>

    <div class="product-feed-all">
        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>

        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>

        <div class="product-feed-bloc">
            <div class="product-feed-img">
                <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="">
            </div>
            <div class="product-feed-info">
                <p>Baguette</p>
                <p>1,20€</p>
            </div>
        </div>
    </div>
</body>

<?php $page_content = ob_get_clean();