<?php

class Product {
    private $id;
    private $user;
    private $category;
    private $name;
    private $description;
    private $price;
    private $image;

    public function __construct($id,$category, $name, $image, $description, $price) {
        $this->id = $id;
        $this->image = $image;
        $this->category = $category;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
      return $this->description;
  }

    public function getPrice() {
        return $this->price;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
      $this->$description = $description;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
};

?>