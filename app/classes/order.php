<?php
class Order implements Serializable {
    private $productList;
    private $total;

    public function __construct() {
        $this->productList = array();
        $this->total = 0;
    }

    public function addProductOrder(ProductOrder $productOrder) {
        $this->productList[] = $productOrder;
        $this->calculateTotal();
    }

    public function getProductList() {
        return $this->productList;
    }

    public function getTotal() {
        return $this->total;
    }

    // Método para calcular el total del pedido sumando los totales de los productos
    private function calculateTotal() {
        $this->total = 0;
        foreach ($this->productList as $productOrder) {
            $this->total += $productOrder->getTotal();
        }
    }

    public function serialize() {
        return serialize(array(
            'productList' => $this->productList,
            'total' => $this->total
        ));
    }

    public function unserialize($data) {
        $data = unserialize($data);
        $this->productList = $data['productList'];
        $this->total = $data['total'];
    }
}

?>