<?php
//footer

ob_start();?>

<footer>
    <div class="all-foot1">
        <div class="footer_part1">
            <p>NOUS CONTACTER</p>
            <ul>
                <li>Tél : 06 98 20 99 87</li>
                <li><a href="#">Email : sweethome78390@gmail.com</a></li>
            </ul>
        </div>
        <div class="footer_part2">
            <p>CONDITIONS</p>
            <ul>
                <li><a href="#">Paramètres de cookies</a></li>
                <li><a href="#">Conditions d'utilisation</a></li>
                <li><a href="#">Condition générales de ventes</a></li>
                <li><a href="#">Politique de confidentialité et de cookies</a></li>
                <li><a href="#">Mentions légales</a></li>
            </ul>
        </div>
        <div class="footer_part3">
            <img class="img_sweet_home" src="<?= PROJECT_FOLDER ?>/src/img/sweetHome.svg">
        </div>
    </div>
    <div class="all-foot2">
        <div class="second_footer">
            <div class="logo_social">
                <a href="https://www.instagram.com/">
                    <i class="fa-brands fa-instagram" style="color: black;"></i>
                </a>
                <a href="https://www.snapchat.com/fr-FR">
                    <i class="fa-brands fa-snapchat" style="color: black;"></i>
                </a>
                <a href="https://www.pinterest.fr/">
                    <i class="fa-brands fa-pinterest" style="color: black;"></i>
                </a>
            </div>
            <div class="text-mid">
                <p>PAIEMENT 100% SÉCURISÉ <i class="fa-solid fa-circle-check"></i></p>
            </div>
            <div class="logo_payment">
                <i class="fa-brands fa-cc-visa" style="color: black;"></i>
                <i class="fa-brands fa-cc-mastercard" style="color: black;"></i>
                <i class="fa-brands fa-cc-paypal" style="color: black;"></i>
                <i class="fa-brands fa-cc-apple-pay" style="color: black;"></i>
            </div>
        </div>
    </div>
</footer>

<?php

$footer = ob_get_clean();