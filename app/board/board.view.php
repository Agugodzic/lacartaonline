<?php 
  include_once 'app/board/board.control.php';
 // component('banner');
?>

<div id='board-container'>
  <div id="board-menu-container">


 <?php foreach ($productsForCat as $categoryName => $productsInCategory): ?>

    <div id="<?=$categoryName?>" class="board-items-category">
      <div class="board-items-category-title"><?=$categoryName?> </div>
      <div class="board-items">

        <?php foreach ($productsInCategory as $product): ?>
        <div class="board-item">
        <div class="board-description-title"><?=$product->getName()?></div>
          <div class="board-item-description">
          <div>
            <img class="board-item-image" src=<?=$product->getImage()?>>
          </div>
            <?=$product->getDescription()?>
          </div>
          <div class="board-item-prices">
              <div class="board-item-price">
                <h4 class="board-item-variant-price-title">Simple:</h4>
                $<?=$product->getPrice()?>
              </div>
              <div class="board-item-price">
                <h4 class="board-item-variant-price-title">Doble:</h4>
                $<?=$product->getPrice()?>
              </div>
              <div class="board-item-price">
                <h4 class="board-item-variant-price-title">Triple:</h4>
                $<?=$product->getPrice()?>
              </div>
            </div>
          
          <form method="POST" action="/producto">
            <input class="hidden" type="text" name="id" value="<?=$product->getId()?>">
            <input class="hidden" type="text" name="product" value="<?=$product->getName()?>">
            <input class="hidden" type="text" name="description" value="<?=$product->getDescription()?>">
            <input class="hidden" type="text" name="price" value="<?=$product->getPrice()?>">
            <input class="hidden" type="text" name="image" value="<?=$product->getImage()?>">
            <button class="board-add-cart-button">Agregar +</button>
          </form>

        </div> <!--item end -->
        <?php endforeach; ?>

      </div> <!--category items end -->

    </div> <!-- category end -->
    <?php endforeach; ?>

  </div> <!--menu end -->

  
  <?php include_once 'app/cart/cart.view.php'?>

</div> <!--board end -->

<a id="board-cart-button" href="/#cart-container">
  <img id="board-cart-button-img"src=".files/utils/cart-black.png">
</a>


<script src="app/board/board.js"></script>