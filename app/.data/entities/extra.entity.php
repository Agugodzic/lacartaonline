<?php

class ExtrasEntity {
    private $id;
    private $productid;
    private $extra;
    private $price;

    public function __construct($id, $productid, $extra, $price) {
        $this->id = $id;
        $this->productid = $productid;
        $this->extra = $extra;
        $this->price = $price;
    }

    public function __construct($productid, $extra, $price) {
        $this->id = null;
        $this->productid = $productid;
        $this->extra = $extra;
        $this->price = $price;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->productid;
    }

    public function getExtra() {
        return $this->extra;
    }

    public function getPrice() {
        return $this->price;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setProductId($productid) {
        $this->productid = $productid;
    }

    public function setExtra($extra) {
        $this->extra = $extra;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    // Método toList() que devuelve un array con las propiedades del objeto
    public function toList() {
        return [
            'id' => $this->id,
            'productid' => $this->productid,
            'extra' => $this->extra,
            'price' => $this->price,
        ];
    }
}
?>