<?php

class ExtrasEntity {
    private $id;
    private $categoryid;
    private $extra;
    private $price;

    public function __construct($id, $categoryid, $extra, $price) {
        $this->id = $id;
        $this->categoryid = $categoryid;
        $this->extra = $extra;
        $this->price = $price;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getCategoryId() {
        return $this->categoryid;
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

    public function setCategotyId($categoryid) {
        $this->categoryid = $categoryid;
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
            "id" => $this->id,
            "categoryid" => $this->categoryid,
            "extra" => $this->extra,
            "price" => $this->price,
        ];
    }
/*
    public function toDataList() {
        $propertyList = $this->toList();
        $dataList = [];
    
        foreach ($propertyList as $property => $value){
            if($value !== null  $value !== "id"){
                if(is_string($value)){
                    $dataList[$property] = "'".$value."'";
                }else{
                    $dataList[$property] = $value;
                };
            };
        };
        
        return $dataList;
    }

    */
    public function toDataList() {
        return [
        "categoryid" => $this->categoryid,
        "extra" => "'".$this->extra."'",
        "price" => $this->price,
    ];
    }
}
?>