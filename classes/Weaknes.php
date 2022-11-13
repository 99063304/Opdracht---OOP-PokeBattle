<?php
 class Weaknes {
  private $EnergyType;
  private $multiplier;

   public function __construct($EnergyType,$multiplier){
     $this->EnergyType =  $EnergyType;
     $this->multiplier =  $multiplier;
   }
   public function getEnergyType(){
    return $this->EnergyType;
   }
   public function getMultiplier(){
    return $this->multiplier;
   }
   
 }
