<?php

$page = "personalizedServices";
$title = "Sweet Home";

require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <div class="custom-order-bloc">
        <p class="custom-order-title">PRESTATIONS PERSONNALISÉES</p>
        <p class="custom-order-text">Nous réalisons des prestations personnalisées selon vos besoins pour tout type d'événements</p>
    </div>

    <div class="img-custom-order">
        <div class="img-custom-order-1">
            <a href=""><img src="<?=PROJECT_FOLDER ?>src/images/personalized-services-wedding.svg" alt=""></a>
            <a href=""><img src="<?=PROJECT_FOLDER ?>src/images/personalized-services-private-party.svg" alt=""></a>
        </div>
        <div class="img-custom-order-2">
            <a href=""><img src="<?=PROJECT_FOLDER ?>src/images/personalized-services-hotels.svg" alt=""></a>
            <a href=""><img src="<?=PROJECT_FOLDER ?>src/images/personalized-services-custom-order.svg" alt=""></a>
        </div>
    </div>
</body>

<?php $page_content = ob_get_clean();