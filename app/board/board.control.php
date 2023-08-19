<?php
include_once 'app/.data/data-services/category.service.php'; 
include_once 'app/.data/data-services/variants.service.php';
include_once 'app/.data/data-services/product.service.php';

$storeId = $_SESSION['storeId'];
$storeRoute = $_SESSION['storeRoute'];
$products = getProductsByStoreId($storeId);
$categories = getCategoriesByStoreId($storeId);
$variants = getVariantsByStoreId($storeId);

function variantsByProductId($variants,$id) {
  $productVariants = [];

  foreach ($variants as $variant){
    if (intval($variant-> getProductId()) === intval($id)) {
      if($variant -> getVariant1() != null){
        $productVariants[] = ['variant' => $variant -> getVariant1(), 'price' =>  $variant-> getPrice1()];
      };
      if($variant -> getVariant2() != null){
        $productVariants[] = ['variant' => $variant -> getVariant2(), 'price' =>  $variant -> getPrice2()];
      };
      if($variant -> getVariant3() != null){
        $productVariants[] = ['variant' => $variant -> getVariant3(), 'price' =>  $variant -> getPrice3()];
      };
    }
  };
  return $productVariants;
};



function listForCategory($categories, $products) {
  $productsForCategory = [];

  foreach($categories as $category){
    $categoryId = $category->getId();
    $categoryName = $category->getCategoryName();
    $productsForCategory[$categoryName] = []; 

    foreach ($products as $product) {
      if ($product->getCategoryId() === $categoryId) {
        $productsForCategory[$categoryName][] = $product;
      }
    }
  }

  return $productsForCategory;
};

$productsForCat = [];
$productsForCat = listForCategory($categories,$products);


/*function extrasByCategoryId($extras,$categoryId) {
  $categoryExtras = [];

  foreach ($extras as $extra){
    if (intval($extra-> getCategoryId()) === intval($categoryId)) {
      if($extra -> getCategoryId() != null){
        $categoryExtras[] = ['extra' => $extra -> getExtra(), 'price' =>  $extra -> getPrice()];
      };
    }
  };
  //echo'<script>alert("'.$productVariants[1]['variant'].' '.$productVariants[1]['price'].'")</script>';
  return $productVariants;
};*/

?>