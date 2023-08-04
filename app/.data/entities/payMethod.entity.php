<?php

class PayMethodEntity {
  public $id;
  public $storeid;
  public $name;
  public $delivery;

  public function __construct($id, $storeid, $name, $delivery) {
      $this->id = $id;
      $this->storeid = $storeid;
      $this->name = $name;
      $this->delivery = $delivery;
  }

  public function __construct($storeid, $name, $delivery) {
    $this->id = null;
    $this->storeid = $storeid;
    $this->name = $name;
    $this->delivery = $delivery;
}

  public function toList() {
        return [
            'id' => $this->id,
            'storeid' => $this->storeid,
            'name' => $this->name,
            'delivery' => $this->delivery
            ];
        }

    // Getters

    public function getId() {
      return $this->id;
    }

    public function getStoreId() {
        return $this->storeid;
    }

    public function getName() {
        return $this->name;
    }

    public function aviableForDelivery() {
        return $this->delivery;
    }


  // Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setStoreId($storeid) {
        $this->storeid = $storeid;
    }

    public function setCash($name) {
        $this->cash = $name;
    }

    public function aviableForDelivery($boolean) {
        $this->delivery = $boolean;
    }  
  }

?>