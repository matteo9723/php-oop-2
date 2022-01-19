<?php

trait Details {
  public $recycled;
  public $materials;

  public function setRecycled($_recycled){
    $this->recycled = $_recycled;
  }
  public function setMaterials($_materials){
    $this->materials = $_materials;
  }

  public function getRecycled(){
    return $this->recycled ;
  }
  public function getMaterials(){
    return $this->materials ;
  }

  public function isRecycled(){
    if (!$this->recycled){
      throw new Exception("l'oggetto non è reciclato");
    }  
    return "l'oggetto è reciclato";
  }
}

