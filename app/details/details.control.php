<?php

$id;
$product;
$description;
$image;
$price;
$category;

if(isset( $_POST['id'] )){
  $id = intval($_POST['id']);
}

if(isset( $_POST['product'] )){
  $product = $_POST['product'];
}

if(isset( $_POST['description'] )){
  $description = $_POST['description'];
}

if(isset( $_POST['image'] )){
  $image = $_POST['image'];
}

if(isset( $_POST['category'] )){
  $category = $_POST['category'];
}

?>