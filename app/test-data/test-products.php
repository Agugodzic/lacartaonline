<?php 

include_once 'app/classes/product.php';
include 'app/.data/entities/product.entity.php';

$products = [
  new ProductEntity(1,1,1,'Chesse Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/burguer1.jpg"),
  new ProductEntity(2,1,1,'Grand Oklahoma Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas',2500,".files/test/product-images/burguer2.jpg"),
  new ProductEntity(3,1,1,'patty melt','Doble carne, doble cheddar, huevo a la plancha',2500,".files/test/product-images/burguer3.jpg"),
  new ProductEntity(4,1,1,'veggie burguer','Doble carne, doble cheddar bastón de muzzarella en pan artesanal',2500,".files/test/product-images/burguer1.jpg"),
  new ProductEntity(5,1,1,'Grand Oklahoma Burguer','Doble carne, doble cheddar, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/burguer2.jpg"),
  new ProductEntity(6,1,1,'Monster Cheddar','huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/burguer4.jpg"),
  new ProductEntity(7,1,1,'Triple Cheddar Burguer','Doble carne, doble cheddar, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/burguer3.jpg"),
  new ProductEntity(8,1,1,'Onion Grill Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas',2500,".files/test/product-images/burguer1.jpg"),
  new ProductEntity(9,1,4,'Triple Cheddar Burguer','Doble carne, doble cheddar,bastón de muzzarella en pan artesanal',2500,".files/test/product-images/pizza1.jpg"),
  new ProductEntity(10,1,4,'Pizza napolitana','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/pizza2.jpg"),
  new ProductEntity(11,1,4,'Pizza con albondigas','Doble carne, doble cheddar, huevo a la plancha',2500,".files/test/product-images/pizza3.jpg"),
  new ProductEntity(12,1,4,'Pizza Margarita','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/pizza4.jpg"),
  new ProductEntity(13,1,4,'Triple Cheddar Burguer',' bastón de muzzarella en pan artesanal',2500,".files/test/product-images/pizza1.jpg"),
  new ProductEntity(14,1,4,'Triple Cheddar Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/pizza2.jpg"),
  new ProductEntity(15,1,4,'Triple Cheddar Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/pizza3.jpg"),
  new ProductEntity(16,1,5,'Triple Cheddar Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',1200,".files/test/product-images/papas1.jpg"),
  new ProductEntity(17,1,5,'Triple Cheddar Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',1600,".files/test/product-images/papas2.jpg"),
  new ProductEntity(18,1,5,'Triple Cheddar Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',1700,".files/test/product-images/papas3.jpg"),
  new ProductEntity(19,1,5,'Triple Cheddar Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/papas4.jpg"),
  new ProductEntity(20,1,5,'Triple Cheddar Burguer','Doble carne, doble cheddar, huevo a la plancha, aros de cebollas, bastón de muzzarella en pan artesanal',2500,".files/test/product-images/papas1.jpg")
];




?>