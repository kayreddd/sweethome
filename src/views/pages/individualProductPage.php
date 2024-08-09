<?php

$page = "individualProductPage";
$title = "Sweet Home";
$product_id = isset($_GET['product']) ? $_GET['product'] : ''; //l'id du product est récupérer dans l'url juste après le paramètre "product="


require_once __DIR__ . '/../../utils/common.php';
//appel de la fonction qui récup les info en bdd
$individualProduct = $BDD->getProductContentBDD($product_id);  //on appelle la fonction avec l'id du product récupéré

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <div class="all_product_page">
        <?php foreach ($individualProduct as $row) { ?>
            <div class="img_product">
                <img src="<?= PROJECT_FOLDER ?>src/images/no_image.svg" alt="" width="630" height="530">
            </div>

            <div class="info_product">
                <p class="p1"><?php echo $row['product_name'] ?></p>
                <p class="p2"><strong class="unit-price" data-price="<?php echo $row["price"]?>"><?php echo $row["price"]?>€</strong>
                </p>
                <p class="p3">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Facere laborum rerum ullam voluptatem id delectus
                    voluptates dolore voluptas at iusto repellat totam
                    nobis vitae ratione, minus provident, perspiciatis
                    numquam? Eveniet!</p>

                <div class="quantity-selector">
                    <button class="quantity-btn" id="decrease">-</button>
                    <input type="text" id="quantity" value="1" readonly>
                    <button class="quantity-btn" id="increase">+</button>
                </div>

                <div class="atc_button">
                    <a href=""><button>Ajouter au panier</button></a>
                </div>
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
