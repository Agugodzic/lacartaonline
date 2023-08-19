<?php include 'app/nav/nav.control.php'?>

<div id="nav-container" <?=theme_class("nav-container")?> >

  <div class="nav-notification-bubble" id="nav-notification">Categorias aquí</div>
  <div id="nav-menu">
    <img id="nav-side-button"<?=theme_class("nav-menu-image")?> class="menu-open" src="https://cdn-icons-png.flaticon.com/512/55/55003.png">
  </div>
  <div id="nav-buttons"> 
    <?php foreach($testCategories as $category): ?>
      <?php if ($category -> getCategory() != 'Hamburguesas'): ?>
      <button class="nav-button" data-category="<?=$category -> getCategory()?>" onclick="hideElementsExcept('<?= $category -> getCategory() ?>')"><?= $category -> getCategory()?></button>
      <?php endif; ?>

      <?php if($category -> getCategory() == 'Hamburguesas'): ?>
      <button class="nav-button nav-button-select" data-category="<?=$category -> getCategory()?>" onclick="hideElementsExcept('<?= $category -> getCategory() ?>')"><?= $category -> getCategory()?></button>
      <?php endif; ?>
      
    <?php endforeach; ?>
  </div>

  <div id="nav-side-menu" <?=theme_class("nav-side-menu")?>>
    <div id="nav-logo-container">
      <img id="nav-logo-img" src=".files/test/logo-test.png">
    </div>
    <div id="nav-menu-options">	
      <?php foreach($testCategories as $category): ?>
      <a href="#<?= $category -> getCategory()?>"><p <?=theme_class("nav-menu-option")?>> <?= $category -> getCategory()?></p></a>
      <?php endforeach; ?>
      <a id="button-side-switch"><p id="nav-menu-close" <?=theme_class("nav-menu-option")?>> Cerrar</p></a>
    </div>
  </div>
  
</div>

<script src="app/nav/nav.script.js"></script>
