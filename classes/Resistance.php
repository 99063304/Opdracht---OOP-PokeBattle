<?php
 class Resistance {
  public $EnergyType;
  public $waarde;

   public function __construct($EnergyType,$waarde){
     $this->$EnergyType = $EnergyType;
     $this->$waarde = $waarde;
   }
 }
