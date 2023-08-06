<?php
  include 'app/.data/data-services/extras.service.php';
  include 'app/.data/data-services/product.service.php';

  $extras = [];
  $extras = [new ExtrasEntity(null, 1, 'cheddar',200),new ExtrasEntity(null, 1, 'bacon',300),new ExtrasEntity(null, 1, 'tomate',200),new ExtrasEntity(null, 1, 'lechuga',200)];

  foreach($extras as $extra){
    addExtra($extra);
  };

?>