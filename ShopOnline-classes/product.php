<?php

require_once __DIR__ ."/productDetails.php";

class Product {

  use Details;

  private $name;
  private $type;
  private $cost;
  
  public function __construct($_name,$_type,$_cost)
  {
    $this->name = $_name;
    $this->type = $_type;
    $this->cost = $_cost;
  }

  public function setName($_name){
    $this->name = $_name;
  }
  public function setType($_type){
    $this->type = $_type;
  }
  public function setCost($_cost){
    $this->cost = $_cost;
  }
  

  public function getName(){
    return $this->name ;
  }
  public function getType(){
    return $this->type ;
  }
  public function getCost(){
    return $this->cost ;
  }
 
}
