<?php

$page = "contact";
$title = "Sweet Home";

require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <main>
        <div class="all_block_contact">
            <div class="left_box_contact">
                <div class="text1-contact">BIENVENUE CHEZ SWEET HOME</div>
                <div class="text2-contact">Éveillez vos papilles avec nos pâtisseries artisanales et gourmandes</div>
                <div class="text3-contact">
                    Adresse de la boutique :<br>
                    Lun-Ven : 9h00-20h00,<br>
                    Sam-Dim : 9h00-18h00<br>
                    sweethome78390@gmail.com 
                </div>
                <div class="text4-contact">Suivez nous</div>
                <div class="social_medias">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-snapchat"></i>
                    <i class="fa-brands fa-pinterest"></i>
                </div>
                <div class="text5-contact"><i class="fa-regular fa-copyright"></i>2024 Politique de confidentialité</div>
            </div>
            <div class="right_box_contact">
                <form>
                    <p>Contactez-nous</p>
                    <input placeholder="Entrez votre nom"/>
                    <input placeholder="Entrez votre email"/>
                    <textarea class="text_case" placeholder="Entrez votre message"></textarea>
                    <button type="submit" class="submit_button">ENVOYER</button>
                </form>
            </div>

        </div>
    </main>
</body>

<?php $page_content = ob_get_clean();