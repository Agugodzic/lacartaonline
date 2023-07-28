<?php 
  include_once 'app/board/board.control.php';
  include_once 'app/nav/nav.view.php';
  include_once 'app/banner/banner.view.php';
?>

<div id='board-container'>
  <div id="board-menu-container">

 <?php foreach ($productsForCat as $categoryName => $productsInCategory): ?>

    <div id="<?=$categoryName?>" class="board-items-category  reference-element">
      <div class="board-items-category-title"><?=$categoryName?> </div>
      <div class="board-items">

        <?php foreach ($productsInCategory as $product): ?>
        <div class="board-item">

          <div>
            <img class="board-item-image" src=<?=$product->getImage()?>>
          </div>
          
          <div class="board-item-description">
          <div class="board-description-title"><?=$product->getName()?></div>
            <?=$product->getDescription()?>
          </div>

          <div class="board-item-prices">
          <?php foreach (variantsByProductId($product->getId()) as $variant): ?>
            <div class="board-item-price"><h4><?= $variant['variant']?>:</h4> $<?= $variant['price']?> </div>
          <?php endforeach; ?>
          </div>

          <form method="POST" action="/producto">
            <input class="hidden" type="text" name="id" value="<?=$product->getId()?>">
            <input class="hidden" type="text" name="product" value="<?=$product->getName()?>">
            <input class="hidden" type="text" name="description" value="<?=$product->getDescription()?>">
            <input class="hidden" type="text" name="price" value="<?=$product->getPrice()?>">
            <input class="hidden" type="text" name="image" value="<?=$product->getImage()?>">
            <input class="hidden" type="text" name="category" value="<?=$categoryName?>">
            <button class="board-add-cart-button">Agregar +</button>
          </form>

        </div> <!--item end -->
        <?php endforeach; ?>

      </div> <!--category items end -->

    </div> <!-- category end -->
    <?php endforeach; ?>

  </div> <!--menu end -->

  <div id="board-cart-container">
      <?php include_once 'app/cart/cart.view.php'?>
  </div>

</div> <!--board end -->

<a id="board-cart-button" href="/#cart-container">
  <div id="board-cart-button-info">
    <div id="board-cart-button-number">0</div>
    <div id="board-cart-button-price"></div>
  </div>

  <img id="board-cart-button-img" src=".files/utils/cart-black.png">
</a>


<script src="app/board/board.js"></script>