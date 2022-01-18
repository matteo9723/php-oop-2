<?php

require_once __DIR__ ."/user.php";

class PremiumUser extends User{
  private $gift;

  function __construct($_name,$_lastname,$_age,$_gift)
  {
    parent::__construct($_name,$_lastname,$_age);
    $this->gift = $_gift;
    $this->discount = 50;
  }

  public function setDiscount($_discount){
    $this->discount = $_discount;
  }
  public function setGift($_gift){
    $this->gift = $_gift;
  }

  public function getGift(){
    return $this->gift ;
  }

  public function getFinalPrice($_price){
    $finalPrice= $_price - (($_price * $this->discount) / 100);
    return number_format($finalPrice, 2, ",", "");
  }
}