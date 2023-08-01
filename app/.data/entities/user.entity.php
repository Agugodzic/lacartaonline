<?php
namespace userEntity;

class UserEntity {
  public $id;
  public $username;
  public $email;
  public $password;
  public $phone;

  public function __construct($id, $username, $email, $password, $phone) {
      $this->Id = $id;
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;
      $this->phone = $phone;
  }

  public function toList() {
      return [
          'id' => $this->id,
          'username' => $this->username,
          'email' => $this->email,
          'password' => $this->password,
          'phone' => $this->phone
      ];
  }

  
  // Getters

  public function getId() {
      return $this->id;
  }
  
  public function getUsername() {
      return $this->username;
  }

  public function getEmail() {
      return $this->email;
  }

  public function getPassword() {
      return $this->password;
  }

  public function getPhone() {
      return $this->phone;
  }

  // Setters

  public function setId($id) {
      $this->id = $id;
  }

  public function setUsername($username) {
      $this->username = $username;
  }

  public function setEmail($email) {
      $this->email = $email;
  }

  public function setPassword($password) {
      $this->password = $password;
  }

  public function setPhone($phone) {
      $this->phone = $phone;
  }
}


?>