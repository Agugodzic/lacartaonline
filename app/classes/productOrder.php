<?php

class ProductOrder implements Serializable {
    private $product;
    private $variant;
    private $unitPrice;
    private $quantity;
    private $extras;
    private $total;

    public function __construct($product, $variant, $unitPrice, $quantity, $extras) {
        $this->product = $product;
        $this->variant = $variant;
        $this->unitPrice = $unitPrice;
        $this->quantity = $quantity;
        $this->extras = $extras;
        $this->total = $this->calculateTotal();
    }

    public function getProduct() {
        return $this->product;
    }

    public function getVariant() {
        return $this->variant;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getExtras() {
        return $this->extras;
    }

    public function getTotal() {
        return $this->total;
    }

    // Método para calcular el total del pedido
    private function calculateTotal() {
        $total = $this->unitPrice * $this->quantity;
        if (!empty($this->extras)) {
            foreach ($this->extras as $extra) {
                $total += $extra['price'];
            }
        }
        return $total;
    }

    public function serialize() {
        return serialize(array(
            'product' => $this->product,
            'variant' => $this->variant,
            'unitPrice' => $this->unitPrice,
            'quantity' => $this->quantity,
            'extras' => $this->extras,
            'total' => $this->total
        ));
    }

    public function unserialize($data) {
        $data = unserialize($data);
        $this->product = $data['product'];
        $this->variant = $data['variant'];
        $this->unitPrice = $data['unitPrice'];
        $this->quantity = $data['quantity'];
        $this->extras = $data['extras'];
        $this->total = $data['total'];
    }
}

?>