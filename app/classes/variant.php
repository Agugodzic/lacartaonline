<?php

class Variant {
    private $id;
    private $productId;
    private $variant1;
    private $variant2;
    private $variant3;
    private $price1;
    private $price2;
    private $price3;

    public function __construct($id, $productId, $variant1, $variant2, $variant3, $price1, $price2, $price3) {
        $this->id = $id;
        $this->productId = $productId;
        $this->variant1 = $variant1;
        $this->variant2 = $variant2;
        $this->variant3 = $variant3;
        $this->price1 = $price1;
        $this->price2 = $price2;
        $this->price3 = $price3;
    }

    // Getters and setters (optional, but recommended)
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function getVariant1() {
        return $this->variant1;
    }

    public function setVariant1($variant1) {
        $this->variant1 = $variant1;
    }

    public function getVariant2() {
        return $this->variant2;
    }

    public function setVariant2($variant2) {
        $this->variant2 = $variant2;
    }

    public function getVariant3() {
        return $this->variant3;
    }

    public function setVariant3($variant3) {
        $this->variant3 = $variant3;
    }

    public function getPrice1() {
        return $this->price1;
    }

    public function setPrice1($price1) {
        $this->price1 = $price1;
    }

    public function getPrice2() {
        return $this->price2;
    }

    public function setPrice2($price2) {
        $this->price2 = $price2;
    }

    public function getPrice3() {
        return $this->price3;
    }

    public function setPrice3($price3) {
        $this->price3 = $price3;
    }
}

?>