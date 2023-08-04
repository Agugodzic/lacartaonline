<?php

  function addUser($user){
    $values = $user -> toDataList();
    
    return db_insert('userdata', $values); #dbFunctions.php
  };
  
  function deleteUser($userid){
    return db_deleteWhere('users', "userid = ".$userid); #dbFunctions.php
  };

  function editUser($userid,$valueList){
    return db_updateWhere('users', $valueList, "userid = ". $userid); #dbFunctions.php
  };

  function getUserById($userid){
    return db_getWhere('user', "userid = ". $userid); #dbFunctions.php
  };

  function getUser($username,$password){
    return db_getWhere('user', "username = '". $username  ."' AND password = '". $password."'"); #dbFunctions.php
  };

  function getUserByUsername($username){
    return db_getWhere('user', "username = '". $username."'"); #dbFunctions.php
  };

?>