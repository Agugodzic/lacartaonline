<?php 
include '../classes/productOrder.php';
include '../classes/order.php';

$response = [];
$productList = [];
$quantity = 0;

if(isset($_SESSION['order'])){
  $orderString = $_SESSION['order'];
  $order = unserialize($orderString);

  if(isset($_GET['delete'])){
    $deleteIndex = $_GET['delete'];
    $order -> deleteProduct($deleteIndex);
    $_SESSION['order'] = serialize($order);
  }

  $productList = $order -> getProductList();
  $quantity = count($productList);
  $response = [
    "productList" => $productList,
    "quantity" => $quantity,
    "total" => $order -> getTotal()
  ];
};


header('Content-Type: application/json');
echo json_encode($response);

?>