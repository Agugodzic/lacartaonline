<?php

  function addPayMethod($paymethod){
    $values = $paymethod->toList();
    return db_insert('paymethods', $values); #dbFunctions.php
  };
  
  function deletePayMethod($id){
    return db_deleteWhere('paymethods', "id = ".$id); #dbFunctions.php
  };

  function editPayMethod($id, $valueList){
    return db_updateWhere('paymethods', $valueList, "id = ". $categoryid); #dbFunctions.php
  };

  function getPayMethodsByProductId($productid){
    return db_getWhere('paymethods', "id = ". $productid); #dbFunctions.php
  };

?>
