<?php
 class Resistance {
  private $EnergyType;
  private $waarde;

   public function __construct($EnergyType,$waarde){
     $this->EnergyType = $EnergyType;
     $this->waarde = $waarde;
   }
   public function getEnergyType(){
    return $this->EnergyType;
   }
   public function setEnergyType($EnergyType){
     $this->EnergyType = $EnergyType;
   }
   public function getWaarde(){
    return $this->waarde;
   }
   public function setWaarde($waarde){
     $this->waarde = $waarde;
   }
 }
