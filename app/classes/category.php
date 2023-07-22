<?php
class Category {
    private $id;
    private $userid;
    private $category;

    // Constructor
    public function __construct($id, $category) {
        $this->id = $id;
        $this->category = $category;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getCategory() {
        return $this->category;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}
?>