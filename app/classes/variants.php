<?php

class Variants {
    public $id;
    public $productId;
    public $variant;
    public $price;

    public function __construct($id, $productId, $variant, $price) {
        $this->id = $id;
        $this->productId = $productId;
        $this->variant = $variant;
        $this->price = $price;
    }

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

    public function getVariant() {
        return $this->variant;
    }

    public function setVariant($variant) {
        $this->variant = $variant;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}

?>