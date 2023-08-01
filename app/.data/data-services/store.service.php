<?php

function addStore($store){
  $values = $store->toList();
  
  return db_insert('store', $values); #dbFunctions.php
};

function deleteStore($storeid){
  return db_deleteWhere('stores', "Id = ".$storeid); #dbFunctions.php
};

function editStore($storeid, $valuesList){
  return db_updateWhere('stores', $valuesList, "Id = ". $storeid); #dbFunctions.php
};

function getStoreById($storeid){
  return db_getWhere('store', "Id = ". $storeid); #dbFunctions.php
};

function getStoreByUserId($userid){
  return db_getWhere('store', "userid = ".$userid); #dbFunctions.php
};

?>