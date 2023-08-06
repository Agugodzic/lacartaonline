<?php
class VariantsEntity {
  private $id;
  private $storeid;
  private $productid;
  private $variant1;
  private $price1;
  private $variant2;
  private $price2;
  private $variant3;
  private $price3;

  public function __construct($id, $storeid, $productid, $variant1, $variant2, $variant3, $price1, $price2, $price3) {
      $this->id = $id;
      $this->storeid = $storeid;
      $this->productid = $productid;
      $this->variant1 = $variant1;
      $this->price1 = $price1;
      $this->variant2 = $variant2;
      $this->price2 = $price2;
      $this->variant3 = $variant3;
      $this->price3 = $price3;
  }

  // Getters
  public function getId() {
      return $this->id;
  }

  public function getStoreId() {
    return $this->storeid;
  }   

  public function getProductId() {
      return $this->productid;
  }

  public function getVariant1() {
      return $this->variant1;
  }

  public function getPrice1() {
      return $this->price1;
  }

  public function getVariant2() {
      return $this->variant2;
  }

  public function getPrice2() {
      return $this->price2;
  }

  public function getVariant3() {
      return $this->variant3;
  }

  public function getPrice3() {
      return $this->price3;
  }

  // Setters
  public function setId($id) {
      $this->id = $id;
  }

  public function setProductId($productid) {
      $this->productid = $productid;
  }

  public function setVariant1($variant1) {
      $this->variant1 = $variant1;
  }

  public function setPrice1($price1) {
      $this->price1 = $price1;
  }

  public function setVariant2($variant2) {
      $this->variant2 = $variant2;
  }

  public function setPrice2($price2) {
      $this->price2 = $price2;
  }

  public function setVariant3($variant3) {
      $this->variant3 = $variant3;
  }

  public function setPrice3($price3) {
      $this->price3 = $price3;
  }

  // Método toList() que devuelve un array con las propiedades del objeto
  public function toList() {
      return [
          'id' => $this->id,
          'storeid' => $this->productid,
          'productid' => $this->productid,
          'variant1' => $this->variant1,
          'price1' => $this->price1,
          'variant2' => $this->variant2,
          'price2' => $this->price2,
          'variant3' => $this->variant3,
          'price3' => $this->price3,
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
    };
     
    return $dataList;
}
}
?>