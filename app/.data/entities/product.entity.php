<?php

class ProductEntity {
  public $id;
  public $userid;
  public $categoryid;
  public $extrasid;
  public $variantid;
  public $productname;
  public $description;
  public $unitprice;
  public $image;

  public function __construct($id, $userid, $categoryid, $extrasid, $variantid, $productname, $description, $unitprice, $image) {
      $this->id = $id;
      $this->userid = $userid;
      $this->categoryid = $categoryid;
      $this->extrasid = $extrasid;
      $this->variantid = $variantid;
      $this->productname = $productname;
      $this->description = $description;
      $this->unitprice = $unitprice;
      $this->image = $image;
  }

  public function toList() {
      return [
          'id' => $this->id,
          'userid' => $this->userid,
          'categoryid' => $this->categoryid,
          'extrasid' => $this->extrasid,
          'variantid' => $this->variantid,
          'productname' => $this->productname,
          'description' => $this->description,
          'unitprice' => $this->unitprice,
          'image' => $this->image
      ];
  }

  
    // Getters

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userid;
    }

    public function getCategoryId() {
        return $this->categoryid;
    }

    public function getExtrasId() {
        return $this->extrasid;
    }

    public function getVariantId() {
        return $this->variantid;
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

    public function setUserId($userid) {
        $this->userid = $userid;
    }

    public function setCategoryId($categoryid) {
        $this->categoryid = $categoryid;
    }

    public function setExtrasId($extrasid) {
        $this->extrasid = $extrasid;
    }

    public function setVariantId($variantid) {
        $this->variantid = $variantid;
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