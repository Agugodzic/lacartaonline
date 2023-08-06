<?php
include_once 'app/.data/data-services/extras.service.php';

$id;
$product;
$description;
$image;
$category;
$variants;
$price = 0;
$extras = null;


if(isset( $_POST['id'] )){
  $id = intval($_POST['id']);
  $extras = extrasByProductId($id);
}

if(isset( $_POST['product'] )){
  $product = $_POST['product'];
}

if(isset( $_POST['description'] )){
  $description = $_POST['description'];
}

if(isset( $_POST['price'] )){
  $price = $_POST['price'];
}

if(isset( $_POST['image'] )){
  $image = $_POST['image'];
}

if(isset( $_POST['category'] )){
  $category = $_POST['category'];
  $extras = getExtrasByCategoryId($category);
}

if(isset( $_POST['variants'] )){
  $variants = json_decode($_POST['variants'],true);
}

?>