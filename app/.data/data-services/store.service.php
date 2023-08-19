<?php
include 'app/.data/entities/store.entity.php';


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

function getStoreById($id){ 
  $data = db_getWhere('store', "id = ".$id); #dbFunctions.php
  $storeList = [];

  while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
    $storeList[] = new StoreEntity($obj->id, $obj->userid, $obj->storename, $obj->logo, $obj->banner,$obj->email, $obj->phone, $obj->openhours, $obj->route);
  };

  return $storeList;
};

function getStoreByRoute($route){ 
  $data = db_getWhere('store', "route =". "'".$route."'"); #dbFunctions.php
  $storeList = [];

  while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
    $storeList[] = new StoreEntity($obj->id, $obj->userid, $obj->storename, $obj->logo, $obj->banner,$obj->email, $obj->phone, $obj->openhours, $obj->route);
  };

  return $storeList;
};

function getStoreByUserId($userid){ 
  $data = db_getWhere('store', "userid = ".$userid); #dbFunctions.php
  $storeList = [];

  while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
    $storeList[] = new StoreEntity($obj->id, $obj->userid, $obj->storename, $obj->logo, $obj->banner,$obj->email, $obj->phone, $obj->openhours, $obj->route);
  };

  return $storeList;
};

?>