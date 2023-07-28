<?php include_once 'app/details/details.control.php'?>

<div id="details-container">
  <div id="details-back-arrow"><a href="/">< Volver</a></div>

  <div id="details-product-image">
    <img id="details-product-image" src=<?=$image?>>
  </div>

  <div id="details-content">
      <h2 id="details-product"><?= $product ?></h2>
      <div id="details-description"><?= $description ?></div>
      <div id="details-item" class="flex-column">
        <h3 class="details-title">Variantes:</h3>
        <div class="details-item-elements">
          
        <?php foreach(variantsByProductId($id) as $variant): ?>

          <div class="details-item-element">
            <div class="details-item-element-description">
              <h4> <?= $variant['variant']?> </h4>
              <p> $<?= $variant['price']?></p>
            </div>
            <div class="details-item-element-control">
              <input data-variant="<?= $variant['variant']?>" name="option" value="<?= $variant['price']?>" type="checkbox" onclick="uncheckOthers(this)">
            </div>
          </div>

        <?php endforeach; ?>

        </div>
      </div>
      
      <div id="details-item" class="flex-column">
        <h3 class="details-title">Extras</h3>
        <div class="details-item-elements">

        <?php foreach(extrasByProductId($id) as $extra): ?>

          <div class="details-item-element">
            <div class="details-item-element-description">
              <h4><?=$extra['extra']?></h4>
              <p>$<?=$extra['price']?></p>
            </div>
            <div class="details-item-element-control">
              <input data-extra="<?=$extra['extra']?>" value="<?=$extra['price']?>" type="checkbox" onclick="calculateTotal()">
            </div>
          </div>
          
        <?php endforeach; ?>

        </div>
      </div>

      <div id="button-container">
        <div id="details-price">
          <span id="details-price-title">Total:</span>
          <span id="details-price-number">$2500</span>
        </div> 
        <form method="post" action="/#<?=$category?>">
          <input name="product" value="<?=$product?>" class="hidden">
          <input name="final-product" value="<?=$product?>" class="hidden">
          <input name="price" value="0" class="hidden">
          <button class="orange-button" id="details-button">Agregar al pedido</button>
        </form>
      </div>
  </div>
</div>

<script src="app/details/details.js"></script>