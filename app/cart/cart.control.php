<?php 
include 'app/classes/productOrder.php';
include 'app/classes/order.php';

$total = 0;
$orderList = [];

//unset($_SESSION['order']);

if(!isset($_POST['final-product']) && isset($_SESSION['order'])){
  $orderString = $_SESSION['order'];
  $order = unserialize($orderString);
  $orderList = $order->getProductList();
  $total = $order -> getTotal();
}

if(isset($_POST['final-product']) && isset($_POST['price'])){
  $newProductOrder = new ProductOrder($_POST['final-product'] , $_POST['price']);

  if(isset($_SESSION['order'])){
    $orderString = $_SESSION['order'];
    $order = unserialize($orderString);
    $order -> addProductOrder($newProductOrder);
    $_SESSION['order'] = serialize($order);
    $orderList = $order->getProductList();
    $total = $order -> getTotal();

  }else{
    $order = new Order();
    $order -> addProductOrder($newProductOrder);
    $orderList = $order -> getProductList();
    $total = $order -> getTotal();
    $_SESSION['order'] = serialize($order);
  }
  
}



?>