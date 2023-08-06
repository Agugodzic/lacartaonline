<?php include_once 'app/details/details.control.php'?>

<div id="details-container">
  <div id="details-back-arrow"><a href="/">< Volver</a></div>

  <div id="details-product-image">
    <img id="details-product-image" src=<?=$image?>>
  </div>
  <div id="details-content">
      <h2 id="details-product"><?= $product ?></h2>
      <div id="details-description"><?= $description ?></div>

      <?php if(count($variants) > 0) : ?>

      <div id="details-item" class="flex-column">
    
        <h3 class="details-title">Variantes:</h3>
        <div class="details-item-elements">
          
        <?php foreach($variants as $variant): ?>

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
      <?php endif; ?>

        <?php if(count($extras) > 0) : ?>
      <div id="details-item" class="flex-column">
        <h3 class="details-title">Extras</h3>

        <div class="details-item-elements">
          <?php foreach($extras as $extra): ?>

            <div class="details-item-element">
              <div class="details-item-element-description">
                <h4><?=$extra->getExtra()?></h4>
                <p>$<?=$extra->getPrice()?></p>
              </div>
              <div class="details-item-element-control">
                <input data-extra="<?=$extra->getExtra()?>" value="<?=$extra->getPrice()?>" type="checkbox" onclick="calculateTotal()">
              </div>
            </div>
            
          <?php endforeach; ?>
        </div>
      </div>
        <?php endif; ?>

      <div id="button-container">
        <div id="details-price">
          <span id="details-price-title">Total:</span>
          <span id="details-price-number">$<?=$price?></span>
        </div> 
        <form method="post" action="/#<?=$category?>">
          <input name="product" value="<?=$product?>" class="hidden">
          <input name="final-product" value="<?=$product?>" class="hidden">
          <input name="price" value="<?=$price?>" class="hidden">
          <button class="orange-button" id="details-button">Agregar al pedido</button>
        </form>
      </div>
  </div>
</div>

<script src="app/details/details.js"></script>