<?php

class PayMethodsEntity {
  public $id;
  public $userid;
  public $cash;
  public $creditcard;
  public $transfer;
  public $mercadopago;
  public $paymethod1;
  public $paymethod2;
  public $paymethod3;
  public $paymethod4;

  public function __construct($id, $userid, $cash, $creditcard, $transfer, $mercadopago, $paymethod1, $paymethod2, $paymethod3, $paymethod4) {
      $this->id = $id;
      $this->userid = $userid;
      $this->cash = $cash;
      $this->creditcard = $creditcard;
      $this->transfer = $transfer;
      $this->mercadopago = $mercadopago;
      $this->paymethod1 = $paymethod1;
      $this->paymethod2 = $paymethod2;
      $this->paymethod3 = $paymethod3;
      $this->paymethod4 = $paymethod4;
  }

  public function toList() {
      return [
          'id' => $this->id,
          'userid' => $this->userid,
          'cash' => $this->cash,
          'creditcard' => $this->creditcar,
          'transfer' => $this->transfer,
          'paymethod1' => $this->paymethod1,
          'paymethod2' => $this->paymethod2,
          'paymethod3' => $this->paymethod3,
          'paymethod4' => $this->paymethod4
        ];
      }

      // Getters

    public function getId() {
      return $this->id;
  }

  public function getUserId() {
      return $this->userid;
  }

  public function isCash() {
      return $this->cash;
  }

  public function isCreditCard() {
      return $this->creditcard;
  }

  public function isTransfer() {
      return $this->transfer;
  }

  public function isMercadoPago() {
      return $this->mercadopago;
  }

  public function getPayMethod1() {
      return $this->paymethod1;
  }

  public function getPayMethod2() {
      return $this->paymethod2;
  }

  public function getPayMethod3() {
      return $this->paymethod3;
  }

  public function getPayMethod4() {
      return $this->paymethod4;
  }

  // Setters

  public function setId($id) {
      $this->id = $id;
  }

  public function setUserId($userid) {
      $this->userid = $userid;
  }

  public function setCash($cash) {
      $this->cash = $cash;
  }

  public function setCreditCard($creditcard) {
      $this->creditcard = $creditcard;
  }

  public function setTransfer($transfer) {
      $this->transfer = $transfer;
  }

  public function setMercadoPago($mercadopago) {
      $this->mercadopago = $mercadopago;
  }

  public function setPayMethod1($paymethod1) {
      $this->paymethod1 = $paymethod1;
  }

  public function setPayMethod2($paymethod2) {
      $this->paymethod2 = $paymethod2;
  }

  public function setPayMethod3($paymethod3) {
      $this->paymethod3 = $paymethod3;
  }

  public function setPayMethod4($paymethod4) {
      $this->paymethod4 = $paymethod4;
  }
  
  }

?>