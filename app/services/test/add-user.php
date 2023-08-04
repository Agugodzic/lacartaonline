<?php
  include 'app/.data/data-services/variants.service.php';

  $variants = [
    new VariantsEntity(1,1,'Simple','Doble',null,2500,3000,null),
    new VariantsEntity(2,2,'Simple',null,null,2500,null,null),
    new VariantsEntity(3,3,'Simple','Doble','triple',2500,3000,3300),
    new VariantsEntity(4,4,'Simple','Doble',null,2500,3000,null),
    new VariantsEntity(5,5,'Simple',null,null,2500,null,null),
    new VariantsEntity(6,6,'Simple','Doble',null,2500,3000,3300),
    new VariantsEntity(7,7,'Simple','Doble',null,2500,3000,null),
    new VariantsEntity(8,8,'Simple',null,null,2500,null,null),
    new VariantsEntity(9,9,'Simple','Doble','triple',2500,3000,3300),
    new VariantsEntity(10,10,'Simple','Doble',null,2500,3000,null),
    new VariantsEntity(11,11,'Simple',null,null,2500,null,null),
    new VariantsEntity(12,12,'Simple','Doble',null,2500,3000,3300),
    new VariantsEntity(13,13,'Simple','Doble',null,2500,3000,null),
    new VariantsEntity(14,14,'Simple',null,null,2500,null,null),
    new VariantsEntity(15,15,'Simple','Doble','triple',2500,3000,3300),
    new VariantsEntity(16,16,'Simple','Doble',null,2500,3000,null),
    new VariantsEntity(17,17,'Simple',null,null,2500,null,null),
    new VariantsEntity(18,18,'Simple','Doble',null,2500,3000,3300),
    new VariantsEntity(19,19,'Simple',null,null,2500,null,null),
    new VariantsEntity(20,20,'Simple','Doble','triple',2500,3000,3300)
  ];
  
  foreach($variants as $variant){
    $resp = addVariant($variant);
  }

?>