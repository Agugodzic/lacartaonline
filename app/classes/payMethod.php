<?php
class MethodModel{
  public $method;
  public $aviableInDelivery;

  function __construct($method, $aviableInDelivery) {
    $this -> method = $method;
    $this -> aviableInDelivery = $aviableInDelivery;
  }
}

class PayMethod {
    private $id;
    private $clientId;
    private $method1;
    private $method2;
    private $method3;
    private $method4;

    public function __construct($id, $clientId, $method1, $method2, $method3, $method4) {
        $this->id = $id;
        $this->clientId = $clientId;
        $this->method1 = $method1;
        $this->method2 = $method2;
        $this->method3 = $method3;
        $this->method4 = $method4;
    }

    // GETTERS
    public function getId() {
        return $this->id;
    }

    public function getClientId() {
        return $this->clientId;
    }

    public function getMethod1() {
        return $this->method1;
    }

    public function getMethod2() {
        return $this->method2;
    }

    public function getMethod3() {
        return $this->method3;
    }

    public function getMethod4() {
        return $this->method4;
    }


    // SETTERS
    public function setId($id) {
        $this->id = $id;
    }

    public function setClientId($clientId) {
        $this->clientId = $clientId;
    }

    public function setMethod1($method) {
        $this->method1 = $method;
    }

    public function setMethod2($method) {
      $this->method2 = $method;
    }

    public function setMethod3($method) {
      $this->method3 = $method;
    }

    public function setMethod4($method) {
      $this->method4 = $method;
    }
}

?>