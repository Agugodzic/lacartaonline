<?php

class ProductOrder implements Serializable {
    private $product;
    private $price;

    public function __construct($product, $price) {
        $this->product = $product;
        $this->price = $price;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getPrice() {
        return $this->price;
    }

    public function serialize() {
        return serialize(array(
            'product' => $this->product,
            'price' => $this->price
        ));
    }

    public function unserialize($data) {
        $data = unserialize($data);
        $this->product = $data['product'];;
        $this->price = $data['price'];
    }
}

?>