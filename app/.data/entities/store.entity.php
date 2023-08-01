<?php

class StoreEntity {
  public $Id;
  public $userid;
  public $openhours;
  public $storename;
  public $logo;
  public $banner;

  public function __construct($Id, $userid, $openhours, $storename, $logo, $banner) {
      $this->Id = $Id;
      $this->userid = $userid;
      $this->openhours = $openhours;
      $this->storename = $storename;
      $this->logo = $logo;
      $this->banner = $banner;
  }

  public function toList() {
      return [
          'Id' => $this->Id,
          'userid' => $this->userid,
          'openhours' => $this->openhours,
          'storename' => $this->storename,
          'logo' => $this->logo,
          'banner' => $this->banner
      ];
  }

  // Getters
    
  public function getId() {
      return $this->Id;
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

  public function setId($Id) {
      $this->Id = $Id;
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