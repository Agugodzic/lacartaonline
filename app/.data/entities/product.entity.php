<?php

class ProductEntity {
  public $id;
  public $storeid;
  public $categoryid;
  public $productname;
  public $description;
  public $unitprice;
  public $image;

  //$id,$storeId, $category, $name, $image, $description, $price

  public function __construct($id, $storeid, $categoryid, $productname, $description, $unitprice, $image) {
      $this->id = $id;
      $this->storeid = $storeid;
      $this->categoryid = $categoryid;
      $this->productname = $productname;
      $this->description = $description;
      $this->unitprice = $unitprice;
      $this->image = $image;
  }

  public function toList() {
      return [
          'id' => $this->id,
          'storeid' => $this->storeid,
          'categoryid' => $this->categoryid,
          'productname' => $this->productname,
          'description' => $this->description,
          'unitprice' => $this->unitprice,
          'image' => $this->image
      ];
  }

  public function toDataList() {
    return [
        'id' => $this->id,
        'storeid' => $this->storeid,
        'categoryid' => $this->categoryid,
        'productname' => "'".$this->productname."'",
        'description' => "'".$this->description."'",
        'unitprice' => $this->unitprice,
        'image' => "'".$this->image."'"
    ];
}
  
    // Getters

    public function getId() {
        return intval($this->id);
    }

    public function getStoreId() {
        return $this->storeid;
    }

    public function getCategoryId() {
        return $this->categoryid;
    }

    public function getProductName() {
        return $this->productname;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getUnitPrice() {
        return $this->unitprice;
    }

    public function getImage() {
        return $this->image;
    }

    // Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setStoreId($storeid) {
        $this->storeid = $storeid;
    }

    public function setCategoryId($categoryid) {
        $this->categoryid = $categoryid;
    }

    public function setProductName($productname) {
        $this->productname = $productname;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setUnitPrice($unitprice) {
        $this->unitprice = $unitprice;
    }

    public function setImage($image) {
        $this->image = $image;
    }
}


?>