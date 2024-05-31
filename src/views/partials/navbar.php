<?php

ob_start();?>

<nav>
    <ul>
        <a href="<?=PROJECT_FOLDER ?>www/?p=home"><li>Accueil</li></a>
        <a href=""><li>Nos produits</li></a>
        <a href="<?=PROJECT_FOLDER ?>www/?p=home"><img src="<?=PROJECT_FOLDER ?>src/images/logo_sweethome.svg" alt=""></a>
        <a href="<?=PROJECT_FOLDER ?>www/?p=personalizedServices"><li class="navbar-elt">Nos prestations <br> personnalisées</li></a>
        <a href="<?=PROJECT_FOLDER ?>"><li>Contact</li></a>
    </ul>
</nav>

<?php

$navbar = ob_get_clean();