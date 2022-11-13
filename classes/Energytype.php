<?php
 class EnergyType {
  private $type;
  private $waarde = 100;

  public function __construct($type){
    $this->type =  $type;
  }
  public function getType(){
    return $this->type;
  }
  public function setType($type){
     $this->type = $type;
  }
  public function getWaarde(){
    return $this->waarde;
  }
  public function setWaarde($waarde){
     $this->waarde = $waarde;
 }

 }
