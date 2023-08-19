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

    public function setAviableForDelivery($boolean) {
        $this->delivery = $boolean;
    }  

  
  public function toList() {
    return [
        'id' => $this->id,
        'storeid' => $this->storeid,
        'name' => $this->name,
        'delivery' => $this->delivery
        ];
    }

    
    public function toDataList() {
        $propertyList = $this->toList();
        $dataList = [];
    
        foreach ($propertyList as $property => $value){
            if($value !== null){
                if(is_string($value)){
                    $dataList[$property] = "'".$value."'";
                }else{
                    $dataList[$property] = $value;
                };
            };
            return $dataList;
        };
    }

}
?>