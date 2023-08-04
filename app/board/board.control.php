<?php
include_once 'app/.data/data-services/category.service.php';  // aca se solicitaran las categorias a la base de datos
include_once 'app/test-data/test-variants.php';
include_once 'app/.data/data-services/product.service.php';

$products = getProductsByStoreId(1);
$categories = getCategoriesByStoreId(1);

function listForCategory($categories, $products) {
  $productsForCategory = [];

  foreach($categories as $category){
    $categoryId = $category->getId();
    $categoryName = $category->getCategoryName();
    $productsForCategory[$categoryName] = []; 

    foreach ($products as $product) {
      if ($product->getCategoryId() == $categoryId) {
        $productsForCategory[$categoryName][] = $product;
      }
    }
  }

  return $productsForCategory;
};

$productsForCat = [];
$productsForCat = listForCategory($categories,$products);

?>