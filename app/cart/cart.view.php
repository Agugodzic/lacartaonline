<?php include_once 'app/cart/cart.control.php'?>

<div id="cart-space">
  <div id="cart-container">
    <h2 id="cart-title">Carrito:</h2>
      <div id="cart-items">
      
      <p id="cart-message">No hay productos en el carrito.</p>

      <?php foreach($orderList as $index => $product): ?>

        <div id="cart-item-<?= $index ?>" class="cart-item">
          <div class="cart-item-description">
            <div class="cart-item-description-title"><?=$product->getProduct() ?></div>
            <div class="cart-item-description-price">$<?=$product->getPrice() ?></div>
          </div>

          <button type="button" class="cart-item-delete" onclick="deleteCartItem(<?= $index ?>)">
            <img class="cart-item-delete-img" src=".files/utils/delete.png">
          </button>
        </div>

      <?php endforeach; ?>

      </div>

      <div id="cart-button-container">
        <div id="cart-total">Total: $<?= $total ?></div>
        <button id="cart-button" class="orange-button" onclick="cartSend()">Finalizar compra!</button>
      </div>
      
  </div>
</div>

<script src="app/cart/cart.js"></script>