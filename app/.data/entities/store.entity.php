<?php

class StoreEntity {
  public $id;
  public $userid;
  public $openhours;
  public $storename;
  public $logo;
  public $banner;
  public $email;
  public $phone;

  public function __construct($id, $userid, $storename, $logo, $banner ,$email, $phone, $openhours) {
      $this->id = $id;
      $this->userid = $userid;
      $this->openhours = $openhours;
      $this->storename = $storename;
      $this->logo = $logo;
      $this->banner = $banner;
      $this->phone = $phone;
      $this->email = $email;
  }

  public function toList() {
      return [
          'id' => $this->id,
          'userid' => $this->userid,
          'openhours' => $this->openhours,
          'storename' => $this->storename,
          'logo' => $this->logo,
          'banner' => $this->banner,
          'email' => $this->email,
          'phone' => $this->phone
      ];
  }

  public function toDataList() {
    return [
        'userid' => $this->userid,
        'openhours' => "'".$this->openhours."'",
        'storename' => "'".$this->storename."'",
        'logo' => "'".$this->logo."'",
        'banner' => "'".$this->banner."'",
        'email' => "'".$this->email."'",
        'phone' => "'".$this->phone."'"
    ];
}

  // Getters
    
  public function getId() {
      return $this->id;
  }

  public function getUserId() {
      return $this->userid;
  }

  public function getOpenHours() {
      return $this->openhours;
  }

  public function getStoreName() {
      return $this->storename;
  }

  public function getLogo() {
      return $this->logo;
  }

  public function getBanner() {
      return $this->banner;
  }

  // Setters

  public function setId($id) {
      $this->id = $id;
  }

  public function setUserId($userid) {
      $this->userid = $userid;
  }

  public function setOpenHours($openhours) {
      $this->openhours = $openhours;
  }

  public function setStoreName($storename) {
      $this->storename = $storename;
  }

  public function setLogo($logo) {
      $this->logo = $logo;
  }

  public function setBanner($banner) {
      $this->banner = $banner;
  }
}


?>