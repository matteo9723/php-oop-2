<?php

class User {
  private $name;
  private $lastname;
  private $age;
  protected $discount = 0;
  
  public function __construct($_name,$_lastname,$_age)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->age = $_age;
  }

  public function setName($_name){
    $this->name = $_name;
  }
  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }
  public function setAge($_age){
    $this->name = $_age;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  public function getName(){
    return $this->name ;
  }
  public function getLastname(){
    return $this->lastname ;
  }
  public function getAge(){
    return $this->age ;
  }
  public function getDiscount(){
    return $this->discount ;
  }
  public function getFinalPrice($_price){
    $finalPrice= $_price - (($_price * $this->discount) / 100);
    return number_format($finalPrice, 2, ",", "")." €";
  }

}
