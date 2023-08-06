<?php
  include 'app/.data/entities/product.entity.php';

  function addProduct($product){
    $values = $product->toDataList();
    return db_insert('product', $values); #dbFunctions.php
  };
  
  function deleteProduct($productid){
    return db_deleteWhere('product', "id = " . $productid); #dbFunctions.php
  };

  function editProductById($id, $valueList){
    return db_updateWhere('product', $valueList , "id = " . $id); #dbFunctions.php
  };

  function getProductsByStoreId($storeid){
    $data = db_getWhere('product', "storeid = " . $storeid); #dbFunctions.php

    while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
      $productList[] = new ProductEntity($obj->id,$obj->storeid, $obj->categoryid, $obj->productname, $obj->description, $obj->unitprice, $obj->image);
    };

    return $productList;
  };

  function getProductsIdByCategory($categoryid){
    $data = db_getColumnsWhere('product', ['id'] , "categoryid = " . $categoryId); #dbFunctions.php
    $idList = [];

    while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
      $idList[] = $obj->id;
    };

    return $idList;
  };

  function getProductById($id){
    return db_getWhere('product', "id = " . $id); #dbFunctions.php
  };

?>