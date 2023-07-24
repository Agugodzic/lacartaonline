<div id="finish-container">
  <div id="finish-content">

    <div id="finish-back-container">
      <a href="/" id="finish-back-button">
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
        <input placeholder="Tu nombre" type="text" name="text" class="finish-input">
      </div>
      
      <div class="finish-form-item">
        <p class="finish-input-title">Direccion de entrega:</p>
        <input id="finish-direction-input" placeholder="Direccion" type="text" name="text" class="finish-input">
      </div>

      <div class="finish-form-item">
        <p class="finish-input-title">Observaciones:</p>
        <input id="finish-obs-input" placeholder="Timbre no anda, etc" type="text" name="text" class="finish-input">
      </div>

      <div class="finish-form-item">
        <div class="switch">
          <button type="button" id="finish-cash-switch" onclick="switchMethod('cash')" class="switch1">Efectivo</button>
          <button type="button" id="finish-other-switch" onclick="switchMethod('other')" class="switch2">Otro</button>
        </div>
      </div>

      <div id="finish-method-input" class="finish-form-item">
        <p class="finish-input-title">Pago con $:</p>
        <input placeholder="Monto" type="text" name="text" class="finish-input">
      </div>


      <div id="finish-checks-container">
        <div class="finish-check-item">
            <h4 class="finish-check-title">Mercadopago</h4>
            <input class="finish-check-checkbock" type="checkbox">
        </div>

        <div class="finish-check-item">
            <h4 class="finish-check-title">Billetera sf</h4>
            <input class="finish-check-checkbock" type="checkbox">
        </div>

        <div class="finish-check-item">
            <h4 class="finish-check-title">transferencia</h4>
            <input class="finish-check-checkbock" type="checkbox">
        </div>

      </div>

          
      <a id="finish-send-button" class="orange-button">Enviar por Whatsapp</a>
    </form>
  </div>
</div>
<script src="app/finish/finish.js"></script>