<?php
  $total = 0;

  if(isset($_POST['total'])){
    $total = $_POST['total'];
  }

  function notDeliveryClass($value){
    if(!$value){
      echo 'not-delivery';
    }
  };
?>