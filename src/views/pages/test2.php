<form action="<?=PROJECT_FOLDER ?>www/?p=checkout" method="post">
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
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $row["name"]?></a></h5>
                                    <span class="text-muted font-weight-normal font-italic d-block">Catégorie: <?php echo $row["category"]?></span>
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
        <button type="submit" class="btn btn-dark rounded-pill py-2 btn-block">Passer au paiement</button>
    </div>
</form>