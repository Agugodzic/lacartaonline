<?php

  db_connect(); #dbFunctions.php

  function addUser($user){
    $values = $user -> toList();
    
    return db_insert('user', $values); #dbFunctions.php
  };
  
  function deleteUser($userid){
    return db_deleteWhere('users', "userid = ".$userid); #dbFunctions.php
  };

  function editUser($userid,$valuesList){
    return db_updateWhere('users', $valuesList, "userid = ". $userid); #dbFunctions.php
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