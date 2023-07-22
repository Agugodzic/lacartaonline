<?php
include 'app/test-data/test-categories.php'; // aca se solicitaran los productos a la base de datos
include_once 'app/test-data/test-products.php';  // aca se solicitaran las categorias a la base de datos
  
function listForCategory($categories, $products) {
  $productsForCategory = [];

  foreach ($categories as $category) {
    $categoryId = $category->getId();
    $categoryName = $category->getCategory();
    $productsForCategory[$categoryName] = []; 

    foreach ($products as $product) {
      if ($product->getCategory() == $categoryId) {
        $productsForCategory[$categoryName][] = $product;
      }
    }
  }

  return $productsForCategory;
};

$productsForCat = [];
$productsForCat = listForCategory($testCategories,$products);

/*
foreach ($productsForCat as $categoryName => $productsInCategory) {
  echo "Categoría: " . $categoryName . PHP_EOL;
  echo "Productos: " . PHP_EOL;

  foreach ($productsInCategory as $product) {
      echo "- " . $product->getName() . PHP_EOL;
  }

  echo PHP_EOL;
}*/
?>