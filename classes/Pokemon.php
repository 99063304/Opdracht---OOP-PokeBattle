<?php

class Pokemon{
   private  $naam;
   private  $energyType;
   private  $health;
   private  $attacks;
   private  $weakness;
   private  $resistance;
   private  $hitpoints;
   private  $status = true;
   private static $livingPokemon = 0;


  public function __construct($energyType, $naam, $health, $attacks, $weakness, $resistance){
    $this->energyType = $energyType;
    $this->naam = $naam;
    $this->health = $health;
    $this->attacks = $attacks;
    $this->weakness =  $weakness;
    $this->resistance = $resistance;
    self::$livingPokemon++;
  }
  
  public function getEnergyType(){
    return $this->energyType;
  }
  public function setEnergyType($energyType){
    $this->energyType = $energyType;
  }

  public function getHealth(){
    return $this->health;
  }
  public function setHealth($health){
     $this->health = $health;
  }

  public function getHitpoints(){
    return $this->hitpoints;
  }
  public function setHitpoints($hitpoints){
     $this->hitpoints = $hitpoints;
  }

  public function getStatus(){
    return $this->status;
  }
  public function setStatus($status){
     $this->status = $status;
  }

  public function Attacker($ff){
       $oponent = $ff;
       $damage = $this->attacks->schade;

     if ($this->weakness->EnergyType == $oponent->getEnergyType()->getType()) {
       $damage = $this->attacks->schade * $this->weakness->multiplier;
     } else if ($this->resistance->EnergyType == $oponent->getEnergyType()->getType()) {
       $damage = $this->attacks->schade - $this->resistance->waarde;
     }
     $oponent->setHealth($oponent->getHealth() - $damage);

     if ($oponent->getHealth() <= 0) {
       if ($oponent->getStatus() == true) {
         self::$livingPokemon--;
         $oponent->setStatus(false);
       }
       return $oponent->getNaam() . ' Fainted, You win!!!';
     }

      return $this->naam . ' valt '. $oponent->getNaam() . ' aan met een ' . $this->attacks->naam . ' attack';
  }
  public static function getPopulation(){
    return self::$livingPokemon;
  }
}
