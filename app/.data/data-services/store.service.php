<?php

function addStore($store){
  $values = $store->toDataList();
  
  return db_insert('store', $values); #dbFunctions.php
};

function deleteStore($storeid){
  return db_deleteWhere('stores', "id = ".$storeid); #dbFunctions.php
};

function editStore($storeid, $valueList){
  return db_updateWhere('stores', $valueList, "id = ". $storeid); #dbFunctions.php
};

function getStoreById($storeid){
  return db_getWhere('store', "id = ". $storeid); #dbFunctions.php
};

function getStoreByUserId($userid){
  return db_getWhere('store', "userid = ".$userid); #dbFunctions.php
};

?>