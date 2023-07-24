<?php

class Extra {
    private $id;
    private $productId;
    private $extra1;
    private $extra2;
    private $extra3;
    private $price1;
    private $price2;
    private $price3;

    // Constructor
    public function __construct($id, $productId, $extra1, $extra2, $extra3, $price1, $price2, $price3) {
        $this->id = $id;
        $this->productId = $productId;
        $this->extra1 = $extra1;
        $this->extra2 = $extra2;
        $this->extra3 = $extra3;
        $this->price1 = $price1;
        $this->price2 = $price2;
        $this->price3 = $price3;
    }

    // Métodos para obtener los valores de las propiedades
    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getExtra1() {
        return $this->extra1;
    }

    public function getExtra2() {
        return $this->extra2;
    }

    public function getExtra3() {
        return $this->extra3;
    }

    public function getPrice1() {
        return $this->price1;
    }

    public function getPrice2() {
        return $this->price2;
    }

    public function getPrice3() {
        return $this->price3;
    }

    // Métodos para establecer los valores de las propiedades
    public function setId($id) {
        $this->id = $id;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function setExtra1($extra1) {
        $this->extra1 = $extra1;
    }

    public function setExtra2($extra2) {
        $this->extra2 = $extra2;
    }

    public function setExtra3($extra3) {
        $this->extra3 = $extra3;
    }

    public function setPrice1($price1) {
        $this->price1 = $price1;
    }

    public function setPrice2($price2) {
        $this->price2 = $price2;
    }

    public function setPrice3($price3) {
        $this->price3 = $price3;
    }
}

?>