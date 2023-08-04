<?php

  include 'app/.data/data-services/user.service.php';
  $json_data = file_get_contents('php://input');
  $data = json_decode($json_data , true);


  if(!isset($_POST['table']) && $data == null){
    echo 'bad request ';
  }

  if(isset($_POST['table']) && $_POST['action'] || $data !== null){
    if($data == null){
      $table = $_POST['table'];
      $action = $_POST['action'];
    }else if($data !== null){
      $table = $data['table'];
      $action = $data['action'];
    };

    if($action == 'update'){
      echo 'update ' . $table;
    };

    if($action == 'add'){
      echo 'add ' . $table;
    };

    if($action == 'get'){
      echo 'get ' . $table;
    };

    if($action == 'delete'){
      echo 'delete ' . $table;
    };
  }

  function addValues($table,$values){
    echo 'add ' . $table;
  }

  function setValues($table,$values){
    echo 'set ' . $table;
  }

  function getValues($table,$values){
    echo 'get ' . $table;
  }

  function deleteValue($table,$id){
    echo 'delete ' . $table;
  }

?>