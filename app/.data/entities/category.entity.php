<?php

class CategoryEntity {
    public $id;
    public $storeid;
    public $categoryname;
    public $image;

    public function __construct($id, $storeid, $categoryname, $image) {
        $this->id = $id;
        $this->storeid = $storeid;
        $this->categoryname = $categoryname;
        $this->image = $image;
    }

    public function toList() {
        return [
            'id' => $this->id,
            'storeid' => $this->storeid,
            'categoryname' => $this->categoryname,
            'image' => $this->image
        ];
    }

    public function toDataList() {
        return [
            'id' => $this->id,
            'storeid' => $this->storeid,
            'categoryname' => "'".$this->categoryname."'",
            'image' => "'".$this->image."'"
        ];
    }

        public function getId() {
            return $this->id;
        }
    
        public function getStoreId() {
            return $this->storeid;
        }
    
        public function setStoreId($storeid) {
            $this->storeid = $storeid;
        }

        public function getCategoryName() {
            return $this->categoryname;
        }
    
        public function setCategoryName($categoryname) {
            $this->categoryname = $categoryname;
        }
    
        public function getImage() {
            return $this->image;
        }

        public function setImage($image) {
            $this->image = $image;
        }

}

?>