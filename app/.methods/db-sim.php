<?php

function variantsByProductId($id) {
  include 'app/test-data/test-variants.php';
  $productVariants = [];

  foreach ($variants as $variant){
    if ($variant-> getProductId() === $id) {
      if($variant -> getVariant1() != null){
        $productVariants[] = ['variant' => $variant -> getVariant1(), 'price' =>  $variant-> getPrice1()];
      };
      if($variant -> getVariant2() != null){
        $productVariants[] = ['variant' => $variant -> getVariant2(), 'price' =>  $variant -> getPrice2()];
      };
      if($variant -> getVariant3() != null){
        $productVariants[] = ['variant' => $variant -> getVariant3(), 'price' =>  $variant -> getPrice3()];
      };
      //echo '<script>alert("'.$productVariants[1].'")</script>';
      return $productVariants;
    }
  };
};

function extrasByProductId($id) {
  include 'app/test-data/test-extras.php';
  $productExtras = [];

  foreach ($extras as $extra){
    if ($extra -> getProductId() === $id) {
      if($extra -> getExtra1() != null){
        $productExtras[] = ['extra' => $extra -> getExtra1(), 'price' =>  $extra-> getPrice1()];
      };
      if($extra -> getExtra2() != null){
        $productExtras[] = ['extra' => $extra -> getExtra2(), 'price' =>  $extra -> getPrice2()];
      };
      if($extra -> getExtra3() != null){
        $productExtras[] = ['extra' => $extra -> getExtra3(), 'price' =>  $extra -> getPrice3()];
      };
      return $productExtras;
    }
  };
};

function payMethodByClientId($id){
  include 'app/test-data/test-methods.php';
  $clientMethods = [];

  foreach ($payMethods as $method){
    if ($method -> getClientId() == $id) {

      if($method -> getMethod1() != null){
        $clientMethods[] = ['method' => $method -> getMethod1() -> method, 'forDelivery' =>  $method-> getMethod1() -> aviableInDelivery];
      };
      if($method -> getMethod2() != null){
        $clientMethods[] = ['method' => $method -> getMethod2() -> method, 'forDelivery' =>  $method-> getMethod2() -> aviableInDelivery];
      };
      if($method -> getMethod3() != null){
        $clientMethods[] = ['method' => $method -> getMethod3() -> method, 'forDelivery' =>  $method-> getMethod3() -> aviableInDelivery];
      };
      if($method -> getMethod4() != null){
        $clientMethods[] = ['method' => $method -> getMethod4() -> method, 'forDelivery' =>  $method-> getMethod4() -> aviableInDelivery];
      };

      return $clientMethods;
    }
  };
};

?>