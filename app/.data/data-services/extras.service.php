<?php

function addExtra($extra){
  $values = $extra->toList();
  return db_insert('extra', $values); #dbFunctions.php
};

function deleteExtra($id){
  return db_deleteWhere('extra', "id = ".$id); #dbFunctions.php
};

function editExtra($id, $valueList){
  return db_updateWhere('extra', $valueList, "id = ". $id); #dbFunctions.php
};

function replaceExtra($id, $extra){
  $values = $extra->toList();
  return db_updateWhere('extra', $valuesList, "id = ". $id); #dbFunctions.php
};

function getExtrasByProductId($productId){
  return db_getWhere('extra', "productid = ". $productId); #dbFunctions.php
};

?>