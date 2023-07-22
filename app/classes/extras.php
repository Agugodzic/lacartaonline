<?php

class Extras {
    public $id;
    public $productId;
    public $extra;
    public $price;

    public function __construct($id, $productId, $extra, $price) {
        $this->id = $id;
        $this->productId = $productId;
        $this->extra = $extra;
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

    public function getExtra() {
        return $this->extra;
    }

    public function setExtra($extra) {
        $this->extra = $extra;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}

?>