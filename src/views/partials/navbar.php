<?php

ob_start(); ?>

<nav>
  <div class="responsive-nav">
    <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
    <a href="<?= PROJECT_FOLDER ?>www/?p=home"><img src="<?= PROJECT_FOLDER ?>src/images/logo_sweethome.svg" alt=""></a>
    <div class="logo_shop"><a href="<?= PROJECT_FOLDER ?>www/?p=shopCart"><i class="fa-solid fa-cart-shopping"></i></a></div>
  </div>
  <ul class="navbar_ul">
    <li><a href="<?= PROJECT_FOLDER ?>www/?p=home">Accueil</a></li>

    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Nos produits</a>
      <div class="dropdown-content">
        <a href="<?= PROJECT_FOLDER ?>www/?p=breads">Pains</a>
        <a href="<?= PROJECT_FOLDER ?>www/?p=pastries">Pâtisseries</a>
        <a href="<?= PROJECT_FOLDER ?>www/?p=sandwiches">Sandwich</a>
        <a href="<?= PROJECT_FOLDER ?>www/?p=drinks">Boissons</a>
      </div>
    </li>

    <li class="logo_center"><a href="<?= PROJECT_FOLDER ?>www/?p=home"><img src="<?= PROJECT_FOLDER ?>src/images/logo_sweethome.svg" alt=""></a></li>

    <li class="dropdown">
      <a href="<?= PROJECT_FOLDER ?>www/?p=personalizedServices" class="dropbtn">Nos prestations <br> personnalisées</a>
      <div class="dropdown-content">
        <a href="#">Mariages</a>
        <a href="#">Fêtes privées</a>
        <a href="#">Hôtels</a>
        <a href="#">Commande <br> personnalisée</a>
      </div>
    </li>

    <li><a href="<?= PROJECT_FOLDER ?>www/?p=contact">Contact</a></li>

    <li class="logo_shop1"><a href="<?= PROJECT_FOLDER ?>www/?p=shopCart"><i class="fa-solid fa-cart-shopping"></i></a></li>
  </ul>
</nav>
<script>
  function toggleMenu() {
    var x = document.querySelector('.navbar_ul');
    if (x.style.display === 'flex') {
      x.style.display = 'none';
    } else {
      x.style.display = 'flex';
    }
  }
</script>


<?php

$navbar = ob_get_clean();
