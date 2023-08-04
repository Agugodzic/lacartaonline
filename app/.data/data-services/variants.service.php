<?php
  include 'app/.data/entities/variants.entity.php';

  function addVariant($variant){
    $values = $variant->toDataList();
    return db_insert('variants', $values); #dbFunctions.php
  };
  
  function deleteVariant($variantid){
    return db_deleteWhere('variants', "id = ".$variantid); #dbFunctions.php
  };

  function editVariant($variantid, $valueList){
    return db_updateWhere('variants', $valueList , "id = ". $variantid); #dbFunctions.php
  };

  function getVariantById($variantid){
    $data = db_getWhere('variants', "id = ". $variantid); #dbFunctions.php
    $variantList = [];

    while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
      $variantList[] = new VariantEntity($obj->id, $obj->productid, $obj->variant1, $obj->price1, $obj->variant2, $obj->price2, $obj->variant3, $obj->price3);
    };

    return $variantList;
  };

  function getVariantsByProductId($productid){
    $data = db_getWhere('variants', "productid = ". $productid); #dbFunctions.php
    $variantList = [];

    while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
      $variantList[] = new VariantEntity($obj->id, $obj->productid, $obj->variant1, $obj->price1, $obj->variant2, $obj->price2, $obj->variant3, $obj->price3);
    };

    return $variantList;
  };

?>
