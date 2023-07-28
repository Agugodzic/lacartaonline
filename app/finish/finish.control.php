<?php
  include 'app/classes/productOrder.php';
  include 'app/classes/order.php';
  
  $total = 0;
  $productList = [];

  if(isset($_SESSION['order'])){
    $order = unserialize($_SESSION['order']);
    $productList = $order -> getProductList();
    $total = $order -> getTotal();
  }

  function notDeliveryClass($value){
    if(!$value){
      echo 'not-delivery';
    }
  };
?>