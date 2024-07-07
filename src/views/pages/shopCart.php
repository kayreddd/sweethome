<?php

$page = "shopCart";
$title = "Sweet Home";

require_once __DIR__ . '/../../utils/common.php';

ob_start(); ?>

<body>
    <main>
        <div class="shopping-cart">
            <!-- Title -->
            <div class="title">
                Shopping Bag
            </div>

            <!-- Product #1 -->
            <div class="item">
                <div class="buttons">
                    <span class="delete-btn"></span>
                    <span class="like-btn"></span>
                </div>

                <div class="image">
                    <img src="item-1.png" alt="" />
                </div>

                <div class="description">
                    <span> </span>
                    <span>Tarte aux fraise</span>
                    <span>Pâtisseries</span>
                </div>

                <div class="quantity">
                    <button class="plus-btn" type="button" name="button">
                        <img src="plus.svg" alt="" />
                    </button>
                    <input type="text" name="name" value="1">
                    <button class="minus-btn" type="button" name="button">
                        <img src="minus.svg" alt="" />
                    </button>
                </div>

                <div class="total-price">3.10€</div>
            </div>

            <!-- Product #2 -->
            <div class="item">
                <div class="buttons">
                    <span class="delete-btn"></span>
                    <span class="like-btn"></span>
                </div>

                <div class="image">
                    <img src="item-2.png" alt="" />
                </div>

                <div class="description">
                    <span> </span>
                    <span>Macaron framboise</span>
                    <span>Pâtisseries</span>
                </div>

                <div class="quantity">
                    <button class="plus-btn" type="button" name="button">
                        <img src="plus.svg" alt="" />
                    </button>
                    <input type="text" name="name" value="1">
                    <button class="minus-btn" type="button" name="button">
                        <img src="minus.svg" alt="" />
                    </button>
                </div>

                <div class="total-price">3.00€</div>
            </div>

            <!-- Product #3 -->
            <div class="item">
                <div class="buttons">
                    <span class="delete-btn"></span>
                    <span class="like-btn"></span>
                </div>

                <div class="image">
                    <img src="item-3.png" alt="" />
                </div>

                <div class="description">
                    <span> </span>
                    <span>Baguette Tradition</span>
                    <span>Pains</span>
                </div>

                <div class="quantity">
                    <button class="plus-btn" type="button" name="button">
                        <img src="plus.svg" alt="" />
                    </button>
                    <input type="text" name="name" value="1">
                    <button class="minus-btn" type="button" name="button">
                        <img src="minus.svg" alt="" />
                    </button>
                </div>

                <div class="total-price">1.50€</div>
            </div>
        </div>
    </main>
    <script>

    </script>
</body>

<?php $page_content = ob_get_clean();
