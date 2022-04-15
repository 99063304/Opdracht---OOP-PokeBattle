<?php
 class Weaknes {
  public $EnergyType;
  public $multiplier;

   public function __construct($EnergyType,$multiplier){
     $this->$EnergyType =  $EnergyType;
     $this->$multiplier =  $multiplier;
   }
 }
