<?php include_once 'app/cart/cart.control.php'?>

<div id="cart-container">
  <h2 id="cart-title">Carrito:</h2>
  <form method="post" action="/finalizar">
    <div id="cart-items">

 
    <?php if(count($orderList) == 0): ?>
    
    <p id="cart-message">No hay productos en el carrito.</p>
    <?php endif; ?>

    <?php foreach($orderList as $product): ?>

    <div class="cart-item">
   <!--
    
      <div class="cart-item-quantity">
        <button class="cart-item-quantity-buttom">-</button>
        <span class="cart-item-quantity-number">2</span>
        <button class="cart-item-quantity-buttom">+</button>
      </div>-->
      
      <div class="cart-item-description">
        <div class="cart-item-description-title"><?=$product -> getProduct() ?></div>
        <div class="cart-item-description-price">$<?=$product -> getPrice() ?></div>
      </div>
      
    </div>
    <?php endforeach; ?>

    </div>

    <div id="cart-button-container">
      <div id="cart-total">$<?= $total ?></div>
      <input name="total" value="<?= $total ?>" class="hidden">
      <button class="orange-button">Finalizar compra!</button>
    </div>

  </form>
</div>

<script src="app/cart/cart.js"></script>