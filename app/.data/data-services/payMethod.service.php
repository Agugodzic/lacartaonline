<?php
  include 'app/.data/entities/payMethod.entity.php';

  function addPayMethod($paymethod){
    $values = $paymethod->toDataList();
    return db_insert('paymethods', $values); #dbFunctions.php
  };
  
  function deletePayMethod($id){
    return db_deleteWhere('paymethods', "id = ".$id); #dbFunctions.php
  };

  function editPayMethod($id, $valueList){
    return db_updateWhere('paymethods', $valueList, "id = ". $categoryid); #dbFunctions.php
  };

  function getPayMethodsByStoreId($storeid){
    $data = db_getWhere('paymethods', "storeid = ". $storeid); #dbFunctions.php
    $payMethods = [];

    while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
      $payMethods[] = new PayMethodEntity($obj->id,$obj->storeid, $obj->name, $obj->delivery);
    };

    return $payMethods;
  };

?>
