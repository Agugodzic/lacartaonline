<?php
  include 'app/.data/entities/category.entity.php';
  
  function addCategory($category){
    $values = $category->toDataList();
    
    return db_insert('category', $values); #dbFunctions.php
  };
  
  function deleteCategory($categoryid){
    return db_deleteWhere('category', "id = ".$categoryid); #dbFunctions.php
  };

  function editCategory($categoryid, $valuesList){
    return db_updateWhere('category', $valuesList, "id = ".$categoryid); #dbFunctions.php
  };

  function getCategoryById($categoryid){
    $data = db_getWhere('category', "id = ".$categoryid); #dbFunctions.php
    $categoryList = [];

    while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
      $categoryList[] = new CategoryEntity($obj->id, $obj->storeid, $obj->categoryname, $obj->image);
    };

    return $categoryList;
  };

  function getCategoriesByStoreId($storeid){
    $data = db_getWhere('category', "storeid = ".$storeid); #dbFunctions.php
    $categoryList = [];

    while($obj = db_fetch_adapter($data)){ #tools - adapters - db.adapter.php
      $categoryList[] = new CategoryEntity($obj->id, $obj->storeid, $obj->categoryname, $obj->image);
    };

    return $categoryList;
  };

?>
