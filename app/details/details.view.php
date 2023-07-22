<?php include_once 'app/details/details.control.php'?>

<div id="details-container">
  <div id="details-back-arrow"><a href="/">< Volver</a></div>
  <div id="details-product-image">
    <img id="details-product-image" src=<?=$image?>>
  </div>

  <div id="details-content">
    <form action="/">
      <h2 id="details-product"><?= $product ?></h2>
      <div id="details-description"><?= $description ?></div>

      <div id="details-item" class="flex-column">
        <h3 class="details-title">Variantes:</h3>
        <div class="details-item-elements">
          
          <div class="details-item-element">
            <div class="details-item-element-description">
              <h4>Simple</h4>
              <p>$2000</p>
            </div>

            <div class="details-item-element-control">
              <input name="option" value="2000" type="checkbox" onclick="uncheckOthers(this)">
            </div>
          </div>

          <div class="details-item-element">
            <div class="details-item-element-description">
              <h4>Doble</h4>
              <p>$2300</p>
            </div>

            <div class="details-item-element-control">
              <input name="option" value="2300" type="checkbox" onclick="uncheckOthers(this)"">
            </div>
          </div>

          <div class="details-item-element">
            <div class="details-item-element-description">
              <h4>Triple</h4>
              <p>$2600</p>
            </div>

            <div class="details-item-element-control">
              <input name="option" value="2600" type="checkbox" onclick="uncheckOthers(this)">
            </div>
          </div>
        </div>
      </div>
      
      <div id="details-item" class="flex-column">
        <h3 class="details-title">Extras</h3>
        <div class="details-item-elements">
  
        <div class="details-item-element">
            <div class="details-item-element-description">
              <h4>Cheddar</h4>
              <p>$100</p>
            </div>

            <div class="details-item-element-control">
              <input value="100" type="checkbox" onclick="calculateTotal()">
            </div>
          </div>
          
          <div class="details-item-element">
            <div class="details-item-element-description">
              <h4>Bacon</h4>
              <p>$200</p>
            </div>

            <div class="details-item-element-control">
              <input value="200" type="checkbox" onclick="calculateTotal()">
            </div>
          </div>
          
          <div class="details-item-element">
            <div class="details-item-element-description">
              <h4>Medallon</h4>
              <p>$300</p>
            </div>

            <div class="details-item-element-control">
              <input value="300" type="checkbox" onclick="calculateTotal()">
            </div>
          </div>
        </div>
      </div>

      <div id="details-price">
        <span id="details-price-title">Total:</span>
        <span id="details-price-number">$2500</span>
      </div> 

      <button class="orange-button" id="details-button">Agregar al pedido</button>
    </form>
  </div>
</div>

<script src="app/details/details.js"></script>