<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Waterfall&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>www/css/contact.css">
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>www/css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Staatliches&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f09ae54942.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>www/css/navbar.css">
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>www/css/home.css">
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>www/css/personalizedServices.css">
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>www/css/feedPage.css">
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>www/css/shopCart.css"> <!-- shop cart css -->
    <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/individualProductPage.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
</head>
<body>
    <?= $navbar ?>
    <?= $page_content ?>
    <?= $footer ?>
</body>
</html>