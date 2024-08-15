<?php

$page = "individualProductPage";
$title = "Sweet Home";
$product_id = isset($_GET['product']) ? $_GET['product'] : ''; //l'id du product est récupérer dans l'url juste après le paramètre "product="


require_once __DIR__ . '/../../utils/common.php';
require_once __DIR__ . '/../../utils/init.php';
//appel de la fonction qui récup les info en bdd
$individualProduct = $BDD->getProductContentBDD($product_id);  //on appelle la fonction avec l'id du product récupéré

function tradCategory($word){ //fonction de traduction pour les catégories
    if($word == "breads"){
        return "Pains";
    }elseif($word == "pastries"){
        return "Pâtisseries";
    }elseif($word == "drinks"){
        return "Boissons";
    }else{
        return "Sandwichs";
    }
}

//ici on va charger le html pour pouvoir lee faire intéragir avec php
$doc = new DomDocument('1.0', 'utf-8');
$doc->validateOnParse = true;

// Désactiver les erreurs de chargement
libxml_use_internal_errors(true);

// Générer le contenu HTML dynamique
$html = '<div class="all_product_page">';
foreach ($individualProduct as $row) {
    $html .= '<div class="img_product">';
    $html .= '<img src="'.PROJECT_FOLDER.'src/images/'.($row["product_img"] == "" ? "no_image.svg" : $row["product_img"]).'" alt="" width="625" height="530">';
    $html .= '</div>';
    $html .= '<div class="info_product">';
    $html .= '<p class="p1" id="p1">'.$row['product_name'].'</p>';
    $html .= '<p class="p2"><strong class="unit-price" id="unit-price" data-price="'.$row["price"].'">'.$row["price"].'€</strong></p>';
    $html .= '<p class="p3">'.$row['product_description'].'</p>';
    $html .= '<div class="quantity-selector">';
    $html .= '<button class="quantity-btn" id="decrease">-</button>';
    $html .= '<input type="text" id="quantity" value="1" readonly>';
    $html .= '<button class="quantity-btn" id="increase">+</button>';
    $html .= '</div>';
    $html .= '<div class="atc_button">';
    // $html .= '<a href=""><button onclick="'.addCart($product_id, $row['product_name'], $row['product_img'], preg_replace("/[^A-Za-z0-9 .\']/", '',$doc->getElementById('unit-price')->nodeValue),$doc->getElementById('quantity')->getAttribute("value")).'">Ajouter au panier</button></a>';
    $html .= '</div>';
    $html .= '</div>';
}
$html .= '</div>';

// Charger le contenu HTML généré dans DOMDocument
$doc->loadHTML($html);

function addCart($product_id, $product_name, $product_img, $product_cat){
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { //on check si le form est bien passé
        $product_quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1; //on recup la quantité
        $calculated_price = isset($_POST['calculated_price']) ? (float)$_POST['calculated_price'] : 0.0; //on récup le prix calculé en fonction de la quantité
       
    $product = array(
        'id' => $product_id,
        'name' => $product_name,
        'image' => $product_img,
        'price' => (double)$calculated_price,
        'quantity' => $product_quantity,
        'category' => tradCategory($product_cat)
    );

    $found = false;
    foreach ($_SESSION["cart"] as $item) {
        if(isset($item['id'])){
            if ($item['id'] == $product_id) {
                $found = true;
                break;
            }
        }
    }
    if (!$found) {
        $product = array(
            'id' => $product_id,
            'name' => $product_name,
            'image' => $product_img,
            'price' => (double)$calculated_price,
            'quantity'=>$product_quantity,
            'category' => tradCategory($product_cat)
        );
        array_push($_SESSION["cart"], $product);
    } else {
        echo "Ce produit est déjà dans le panier.";
    }
}
}

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <div class="all_product_page">
        <?php foreach ($individualProduct as $row) { ?>
            <div class="img_product">
                <img src="<?= PROJECT_FOLDER ?>src/images/<?php echo $row["product_img"] == "" ? "no_image.svg" : $row["product_img"] ?>" alt="" width="605" height="530">
            </div>

            <div class="info_product">
                <p class="p1" id="p1"><?php echo $row['product_name'] ?></p>
                <p class="p2"><strong class="unit-price" name="unit-price" id="unit-price" data-price="<?php echo $row["price"]?>"><?php echo $row["price"]?>€</strong>
                </p>
                <p class="p3"><?php echo $row['product_description'] ?></p>

                <form method="post"> <!-- le form sert à faire passer la quantité et le prix mis à jour par JS  vers php -->
                    <input type="hidden" id="calculated_price" name="calculated_price" value="<?php echo $row['price'] ?>"> <!--input caché pour recup le prix calculé depuis JS-->

                    <div class="quantity-selector">
                        <button class="quantity-btn" id="decrease">-</button>
                        <input type="text" id="quantity" name="quantity" value="1" readonly>
                        <button class="quantity-btn" id="increase">+</button>
                    </div>

                    <div class="atc_button">
                        <a href=""><button onclick="<?php addCart($product_id, $row['product_name'], $row['product_img'], $row["feed_pages"]);?>">Ajouter au panier</button></a>
                    </div>

                </form>
            </div>
        <?php } ?>    
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var decreaseButton = document.getElementById('decrease');
        //     var increaseButton = document.getElementById('increase');
        //     var quantityInput = document.getElementById('quantity');

        //     decreaseButton.addEventListener('click', function() {
        //         var currentValue = parseInt(quantityInput.value);
        //         if (currentValue > 1) {
        //             quantityInput.value = currentValue - 1;
        //         }
        //     });

        //     increaseButton.addEventListener('click', function() {
        //         var currentValue = parseInt(quantityInput.value);
        //         quantityInput.value = currentValue + 1;
        //     });
        // });

        // Fonction pour mettre à jour le prix total basé sur la quantité
        $(document).ready(function() {
            function updatePrice() {
                var pricePerUnit = parseFloat($('.unit-price').data('price'));
                var quantity = parseInt($('#quantity').val());
                var totalPrice = pricePerUnit * quantity;
                $('.unit-price').text(totalPrice.toFixed(2) + '€');
                $('#calculated_price').val(totalPrice.toFixed(2));
            }

            // Événement clic pour le bouton moins
            $('#decrease').on('click', function(e) {
                e.preventDefault();
                var $input = $('#quantity');
                var value = parseInt($input.val());

                if (value > 1) {
                    value = value - 1;
                    $input.val(value);
                    updatePrice();
                }
            });

            // Événement clic pour le bouton plus
            $('#increase').on('click', function(e) {
                e.preventDefault();
                var $input = $('#quantity');
                var value = parseInt($input.val());

                if (value < 15) {
                    value = value + 1;
                    $input.val(value);
                    updatePrice();
                }
            });
        });
    </script>
</body>

<?php $page_content = ob_get_clean();
