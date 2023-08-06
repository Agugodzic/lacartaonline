<?php
include 'app/.data/entities/extra.entity.php';

function addExtra($extra){
  $values = $extra->toDataList();
  return db_insert('extras', $values); #dbFunctions.php
};

function deleteExtra($id){
  return db_deleteWhere('extras', "id = ".$id); #dbFunctions.php
};

function editExtra($id, $valueList){
  return db_updateWhere('extras', $valueList, "id = ". $id); #dbFunctions.php
};

function replaceExtra($id, $extra){
  $values = $extra->toList();
  return db_updateWhere('extras', $valuesList, "id = ". $id); #dbFunctions.php
};

/*
function getExtrasByProductId($productId){
  $data = db_getWhere('extra', "productid = ". $productId); #dbFunctions.php

  while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
    $productList[] = new ExtrasEntity($obj->id,$obj->productId, $obj->extraName, $obj->price);
  };

  return $productList;
};*/

function getExtrasByCategoryId($categoryId){
  $data = db_getWhere('extras', "categoryid = ". $categoryId); #dbFunctions.php
  $extrasList = [];

  while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
    $extrasList[] = new ExtrasEntity($obj->id,$obj->categoryid, $obj->extra, $obj->price);
  };

  return $extrasList;
};

?>