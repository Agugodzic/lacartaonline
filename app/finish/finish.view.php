<?php include_once 'app/finish/finish.control.php'; ?>

<div id="finish-container">
  <div id="finish-content">

    <div id="finish-back-container">
      <a href="/#cart-container" id="finish-back-button">
        <img id="finish-back-img" src=".files/utils/back-arrow3.png">
      </a>
    </div>

    <form id="finish-form">

      <div class="finish-form-item">
        <div class="switch">
          <button type="button" id="finish-delivery-switch" class="switch1" onclick="switchDelivery('delivery')">Delivery</button>
          <button type="button"  id="finish-takeAway-switch" class="switch2" onclick="switchDelivery('takeAway')">Lo busco</button>
        </div>
      </div>
  
      <div class="finish-form-item">
        <p class="finish-input-title">Nombre y apellido:</p>
        <input placeholder="Tu nombre" type="text" name="name" class="finish-input">
      </div>
      
      <div class="finish-form-item">
        <p class="finish-input-title">Direccion de entrega:</p>
        <input id="finish-direction-input" placeholder="Direccion" type="text" name="direction" class="finish-input">
      </div>

      <div class="finish-form-item">
        <p class="finish-input-title">Observaciones:</p>
        <input id="finish-obs-input" placeholder="Timbre no anda, etc" type="text" name="observations" class="finish-input">
      </div>

      <div class="finish-form-item">
        <div class="switch">
          <button type="button" id="finish-cash-switch" onclick="switchMethod('cash')" class="switch1">Efectivo</button>
          <button type="button" id="finish-other-switch" onclick="switchMethod('other')" class="switch2">Otro</button>
        </div>
      </div>

      <div id="finish-method-input" class="finish-form-item">
        <p class="finish-input-title">Pago con $:</p>
        <input placeholder="Monto" type="number" name="payWith" class="finish-input">
      </div>

       
      <div id="finish-checks-container">
      <?php foreach(payMethodByClientId(1) as $method): ?>

      <div class="finish-check-item <?= notDeliveryClass($method['forDelivery']) ?>">
          <h4 class="finish-check-title"><?= $method['method'] ?></h4>
          <input name="method" value="<?= $method['method'] ?>" class="finish-check-checkbock" onclick="uncheckOthers(this)" type="checkbox">
      </div>

      <?php endforeach; ?>

      </div>

      <div id="finish-send-button" >
        <div id="finish-price">
          <span id="finish-price-title">Total:</span>
          <span id="finish-price-number">$<?=$total?></span>
        </div> 
        <button type="button" class="orange-button" onclick="sendOrder()">Enviar por Whatsapp</button>
      </div>   
    </form>
  </div>
</div>
<script src="app/finish/finish.js"></script>