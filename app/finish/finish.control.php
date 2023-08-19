<?php
  include 'app/classes/productOrder.php';
  include 'app/classes/order.php';
  include 'app/.data/data-services/paymethod.service.php';
  
  $total = 0;
  $productList = [];
  $storeId = $_SESSION['storeId'];
  $paymethods = getPayMethodsByStoreId($storeId);
  $morePayways = 0;
  
  foreach($paymethods as $paymethod){
    if(!$paymethod -> aviableForDelivery()){
      $morePayways += 1;
    }
  }

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