<?php
//page panierrrr

$page = "shopCart";
$title = "Sweet Home";

require_once __DIR__ . '/../../utils/common.php';

if (isset($_SESSION["cart"])) $cart = ($_SESSION["cart"]);
// var_dump($cart);
// session_destroy();

//fonction supprimer article panier
function supp_article($id){
    if(isset($_SESSION["cart"]) && isset($_SESSION["cart"][$id])) {
        array_splice($_SESSION["cart"], $id, 1); //on supprime le produit dans le tableau session cart
        header("refresh:0"); // Recharge la page pour refléter les changements
        exit();
    }   
}

// Vérifie si un article doit être supprimé
if (isset($_POST['delete_id'])) {
    supp_article($_POST['delete_id']);  
}

ob_start(); ?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <main>
        <div class="px-4 px-lg-0">
            <div class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                                <table class="table" id="product_shopcart">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Produits</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Prix</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Quantité</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Supprimer</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($cart as $key => $row){?>
                                            <tr>
                                                <th scope="row" class="border-0">
                                                    <div class="p-2">
                                                        <img src="<?=PROJECT_FOLDER ?>src/images/<?php echo $row["image"]?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                        <div class="ml-3 d-inline-block align-middle">
                                                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $row["name"]?></a></h5><span class="text-muted font-weight-normal font-italic d-block">Catégorie: <?php echo $row["category"]?></span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="border-0 align-middle"><strong class="unit-price" data-price="<?php echo number_format((float)$row["price"], 2, '.', '')?>"><?php echo number_format((float)$row["price"], 2, '.', '')?>€</strong></td>
                                                <td class="border-0 align-middle">
                                                    <div class="quantity">
                                                        <button class="minus-btn" type="button" name="button">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <input type="text" name="name" value="<?php echo $row["quantity"]?>">
                                                        <button class="plus-btn" type="button" name="button">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td class="border-0 align-middle">
                                                    <form method="post" action=""> <!--formulaire caché pour pour faire la suppression d'article-->
                                                        <input type="hidden" name="delete_id" value="<?= $key ?>">
                                                        <button type="submit" class="btn btn-link text-dark p-0 m-0 btn-trash">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>                                                
                                                </td>
                                            </tr>
                                       <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End -->
                        </div>
                    </div>

                    <div class="row py-5 p-4 bg-white rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Code de réduction</div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Si vous avez un code promo, veuillez le saisir dans la case ci-dessous.</p>
                                <div class="input-group mb-4 border rounded-pill p-2">
                                    <input type="text" placeholder="Entrer votre code promo" aria-describedby="button-addon3" class="form-control border-0" id="promo-code">
                                    <div class="input-group-append border-0">
                                        <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions pour le vendeur</div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Si vous avez des informations pour le vendeur, vous pouvez les laisser dans la case ci-dessous.</p>
                                <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Récapitulatif de la commande </div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Les frais d'expédition et les frais supplémentaires sont calculés en fonction des valeurs que vous avez saisies.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total </strong><strong id="subtotal">7.60€</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Frais de livraison</strong><strong id="delivery-fee">2.99€</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxe</strong><strong id="tax">0.00€</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold" id="total">10.59€</h5>
                                    </li>
                                </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Passer au paiement</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Fonction pour mettre à jour le prix total basé sur la quantité
    function updatePrice($row) {
        var pricePerUnit = parseFloat($row.find('.unit-price').data('price'));
        var quantity = parseInt($row.find('input').val());
        var totalPrice = pricePerUnit * quantity;
        $row.find('.unit-price').text(totalPrice.toFixed(2) + '€');
    }

    // Événement clic pour le bouton moins
    $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $row = $this.closest('tr');
        var $input = $row.find('input');
        var value = parseInt($input.val());

        if (value > 1) {
            value = value - 1;
            $input.val(value);
            updatePrice($row);
        }
    });

    // Événement clic pour le bouton plus
    $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $row = $this.closest('tr');
        var $input = $row.find('input');
        var value = parseInt($input.val());

        if (value < 100) {
            value = value + 1;
            $input.val(value);
            updatePrice($row);
        }
    });

    // Événement changement pour le champ d'entrée de quantité
    $('input').on('change', function() {
        var $row = $(this).closest('tr');
        updatePrice($row);
    });
    /*---------------------------------------------------------*/

    //fonction permettant l'utilisation des codes promos
    document.getElementById('button-addon3').addEventListener('click', function() {
        var promoCode = document.getElementById('promo-code').value;
        var subtotalElem = document.getElementById('subtotal');
        var deliveryFeeElem = document.getElementById('delivery-fee');
        var taxElem = document.getElementById('tax');
        var totalElem = document.getElementById('total');

        var total = parseFloat(totalElem.textContent.replace('€', ''));
        var deliveryFee = parseFloat(deliveryFeeElem.textContent.replace('€', ''));
        var tax = parseFloat(taxElem.textContent.replace('€', ''));

        var discount = 0;

        // Ajoutez ici vos conditions de code promo
        if (promoCode === 'PROMO10') {
            discount = 10; // 10% de réduction
        } else if (promoCode === 'PROMO20') {
            discount = 20; // 20% de réduction
        } else if (promoCode === 'PROMO50') {
            discount = 50; // 50% de réduction
        }

        var discountAmount = (total * discount) / 100;
        var newTotal = total - discountAmount;

        totalElem.textContent = newTotal.toFixed(2) + '€';
    });
    /*---------------------------------------------------------*/
    
    $(document).ready(function() {
        //calcul prix panier
        var table = document.getElementById('product_shopcart'); //on recup la table contenat les produits du panier
        var deliveryFeeElem = document.getElementById('delivery-fee').textContent; //on recup les frais de livraison
        var subtotalElem = document.getElementById('subtotal'); //on recup le champ sous total pour le mettre à jour après
        var totalField = document.getElementById('total'); //on recup le champ total final pour le mettre à jour
        var deliveryFee = parseFloat(deliveryFeeElem.replace('€', '')); //on parse en float pour le calcul et on retire le €

        var totalRowCount = table.tBodies[0].rows; //liste des tr
        var subTotalCart = 0.0; //on declare une variable qui va stocké le total du panier sans les frais de livraison  
        var totalFinalCart = 0.0; //ici on va stocké le prix final

        //on boucle sur totalRowCount pour accéder au cellules (cases) contenant le prix de chaque produit
        for(var i=0; i<totalRowCount.length; i++){
            var price = totalRowCount[i].cells[1].innerText;
            var priceBis = price.replace("€",""); //on vire le € pour le calcul
            subTotalCart = subTotalCart + parseFloat(priceBis); //on calcule au fur à mesure avec le prix de chaque produit
        }
        totalFinalCart = subTotalCart + deliveryFee; //on ajoute les frais de livraison

        subtotalElem.textContent = subTotalCart.toFixed(2) + '€'; //on remplace le sous total avec le vrai prix
        totalField.textContent = totalFinalCart.toFixed(2) + '€';  //on remplace le total avec le vrai prix final

    });
</script>

<?php $page_content = ob_get_clean();
