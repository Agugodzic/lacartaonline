<?php    
include '.environments/dbConfig.php';
include 'app/.data/dbConection.php';

function db_connect() {
  return DatabaseConnection::getInstance()->getConnection();
}

function db_insert($tableName,$values){
  /*
    $values = [  
      'column1' => value1,
      'column2' => 'value2',
      'colum3' => 'value3',
      ...
    ]
  */
  
  $columns_sql = "";
  $values_sql = "";
  $count = 1;

  foreach($values as $column => $value){
    if(count($values) > $count){
      $columns_sql.= $column. ",";
      $values_sql.= $value. ",";
    }else{
      $columns_sql.= $column;
      $values_sql.= $value;
    };
    $count += 1;
  };

  $sql = "INSERT INTO ".$tableName." (".$columns_sql.") VALUES (".$values_sql.")";
  //echo $sql;
  return mysqli_query(DatabaseConnection::getInstance()->getConnection(),$sql);
};

function db_updateWhere($tableName,$values,$condition){
  $count = 1;
  $updates ="";
  
  foreach($values as $column => $value){
    if(count($values) > $count){
      $updates.= $column. " = ";
      $updates.= $value. " , ";
    }else{
      $updates.= $column. " = ";
      $updates.= $value;
    };
    $count += 1;
  };
  $sql = "UPDATE ".$tableName." SET ".$updates." WHERE ". $condition;
  
  return mysqli_query(DatabaseConnection::getInstance()->getConnection(),$sql);
};

function db_getColumnsWhere($table,$columns,$condition){
  /*
    $columns = [ 'column1','column2','column3',... ];
  */
  $columns_sql = "";
  $count = 1;

  foreach($columns as $column){
    if(count($columns) > $count){
      $columns_sql.= $column. ",";
    }else{
      $columns_sql.= $column;
    };
    $count += 1;
  };

  $sql = "SELECT (".$columns_sql.") FROM ". $tableName ." WHERE ". $condition;
  return mysqli_query(DatabaseConnection::getInstance()->getConnection(),$sql);/*6347724 */
};

function db_deleteWhere($tableName,$condition){
  $sql = "DELETE FROM ". $tableName ." WHERE ". $condition ;
  return mysqli_query(DatabaseConnection::getInstance()->getConnection(),$sql);
};

function db_getWhere($tableName,$condition){
  $sql = "SELECT * FROM ". $tableName ." WHERE ". $condition;
  return mysqli_query(DatabaseConnection::getInstance()->getConnection(),$sql);
};

 ?>