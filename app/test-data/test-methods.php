<?php
include 'app/classes/payMethod.php';

$payMethods = [
  new PayMethod(1,1, new MethodModel('MercadoPago', true) , new MethodModel('Billetera SF', true) , new MethodModel('Transferencia', false) , null),
  new PayMethod(2,2, new MethodModel('MercadoPago', true) , new MethodModel('Transferencia',false) , null , null),
  new PayMethod(3,3, new MethodModel('MercadoPago', true) , new MethodModel('Billetera SF',true) , new MethodModel('Tarjeta',false) , null)
];

?>