<?php

$page = "individualProductPage";
$title = "Sweet Home";

require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <div class="all_product_page">
        <div class="img_product">
            <img src="<?=PROJECT_FOLDER ?>src/images/no_image.svg" alt="" width="757" height="716">
        </div>

        <div class="info_product">
            <p class="p1">NOM DE L'ARTICLE</p>
            <p class="p2">232€</p>
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
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var decreaseButton = document.getElementById('decrease');
            var increaseButton = document.getElementById('increase');
            var quantityInput = document.getElementById('quantity');

            decreaseButton.addEventListener('click', function() {
                var currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            increaseButton.addEventListener('click', function() {
                var currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });
        });
    </script>
</body>

<?php $page_content = ob_get_clean();