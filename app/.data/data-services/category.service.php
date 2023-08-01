<?php
  db_connect(); #dbFunctions.php

  function addCategory($category){
    $values = $category->toList();
    
    return db_insert('category', $values); #dbFunctions.php
  };
  
  function deleteCategory($categoryid){
    return db_deleteWhere('category', "id = ".$categoryid); #dbFunctions.php
  };

  function editCategory($categoryid, $valuesList){
    return db_updateWhere('category', $valuesList, "id = ". $categoryid); #dbFunctions.php
  };

  function getCategoryById($categoryid){
    return db_getWhere('category', "id = ". $categoryid); #dbFunctions.php
  };

  function getCategory($categoryname, $image){
    return db_getWhere('category', "categoryname = '". $categoryname  ."' AND image = '". $image."'"); #dbFunctions.php
  };

  function getCategoryByCategoryname($categoryname){
    return db_getWhere('category', "categoryname = '". $categoryname."'"); #dbFunctions.php
  };
?>
