<?php

ob_start();?>

<nav>
    <ul>
        <li><a href="<?=PROJECT_FOLDER ?>www/?p=home">Accueil</a></li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Nos produits</a>
          <div class="dropdown-content">
            <a href="<?=PROJECT_FOLDER ?>www/?p=breads">Pains</a>
            <a href="<?=PROJECT_FOLDER ?>www/?p=pastries">Pâtisseries</a>
            <a href="<?=PROJECT_FOLDER ?>www/?p=sandwiches">Sandwich</a>
            <a href="<?=PROJECT_FOLDER ?>www/?p=drinks">Boissons</a>
          </div>
        </li>

        <li><a href="<?=PROJECT_FOLDER ?>www/?p=home"><img src="<?=PROJECT_FOLDER ?>src/images/logo_sweethome.svg" alt=""></a></li>

        <li class="dropdown">
            <a href="<?=PROJECT_FOLDER ?>www/?p=personalizedServices" class="dropbtn">Nos prestations <br> personnalisées</a>
            <div class="dropdown-content">
              <a href="#">Mariages</a>
              <a href="#">Fêtes privées</a>
              <a href="#">Hôtels</a>
              <a href="#">Commande <br> personnalisée</a>
            </div>
          </li>

        <li><a href="<?=PROJECT_FOLDER ?>www/?p=contact">Contact</a></li>
    </ul>
</nav>

<?php

$navbar = ob_get_clean();