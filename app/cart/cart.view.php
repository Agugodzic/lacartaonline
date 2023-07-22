<?php include_once 'app/cart/cart.control.php'?>

<div id="cart-container">
  <h2 id="cart-title">Carrito:</h2>
  <div id="cart-items">

  <div class="cart-item">
      <div class="cart-item-quantity">
        <span class="cart-item-quantity-buttom">-</span>
        <span class="cart-item-quantity-number">2</span>
        <span class="cart-item-quantity-buttom">+</span>
      </div>
      <div class="cart-item-description">
        <div class="cart-item-description-title">Triple Burguer Grand Bacon plus</div>
        <div class="cart-item-description-price">$4500 c/u</div>
      </div>
    </div>

    <div class="cart-item">
      <div class="cart-item-quantity">
        <span class="cart-item-quantity-buttom">-</span>
        <span class="cart-item-quantity-number">3</span>
        <span class="cart-item-quantity-buttom">+</span>
      </div>

      <div class="cart-item-description">
        <div class="cart-item-description-title">Triple Burguer Grand Bacon plus</div>
        <div class="cart-item-description-price">$4500 c/u</div>
      </div>
    </div>

    <div class="cart-item">
      <div class="cart-item-quantity">
        <span class="cart-item-quantity-buttom">-</span>
        <span class="cart-item-quantity-number">1</span>
        <span class="cart-item-quantity-buttom">+</span>
      </div>
      <div class="cart-item-description">
        <div class="cart-item-description-title">Triple Burguer Grand Bacon plus</div>
        <div class="cart-item-description-price">$4500 c/u</div>
      </div>
    </div>


  </div>

  <div id="cart-total">Total: $8500</div>

  <a href="/finalizar" class="orange-button">Finalizar compra!</a>
</div>

<script src="app/cart/cart.js"></script>