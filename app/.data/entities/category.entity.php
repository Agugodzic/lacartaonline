<?php

class CategoryEntity {
    public $id;
    public $userid;
    public $categoryname;
    public $image;

    public function __construct($id, $userid, $categoryname, $image) {
        $this->id = $id;
        $this->userid = $userid;
        $this->categoryname = $categoryname;
        $this->image = $image;
    }

    public function toList() {
        return [
            'id' => $this->id,
            'userid' => $this->userid,
            'categoryname' => $this->categoryname,
            'image' => $this->image
        ];
    }

        public function getId() {
            return $this->id;
        }
    
        public function getUserId() {
            return $this->userid;
        }
    
        public function setUserId($userid) {
            $this->userid = $userid;
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