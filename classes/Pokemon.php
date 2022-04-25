<?php

class Pokemon{
   public  $naam;
   public  $energyType;
   public  $health;
   public  $attacks;
   public  $weakness;
   public  $resistance;
   public  $hitpoints;
   public  $status = true;
   public static $livingPokemon = 0;


  public function __construct($energyType, $naam, $health, $attacks, $weakness, $resistance){
    $this->energyType = $energyType;
    $this->naam = $naam;
    $this->health = $health;
    $this->attacks = $attacks;
    $this->weakness =  $weakness;
    $this->resistance = $resistance;
    self::$livingPokemon++;
  }

  public function Attacker($ff){
       $oponent = $ff;
       $damage = $this->attacks->schade;

     if ($this->weakness->EnergyType == $oponent->energyType->type) {
       $damage = $this->attacks->schade * $this->weakness->multiplier;
     } else if ($this->resistance->EnergyType == $oponent->energyType->type) {
       $damage = $this->attacks->schade - $this->resistance->waarde;
     }
     $oponent->health = $oponent->health - $damage;

     if ($oponent->health <= 0) {
       if ($oponent->status == true) {
         self::$livingPokemon--;
         $oponent->status = false;
       }
       return $oponent->naam . ' Fainted, You win!!!';
     }

      return $this->naam . ' valt '. $oponent->naam . ' aan met een ' . $this->attacks->naam . ' attack';
  }
  public static function getPopulation(){
    return self::$livingPokemon;
  }
}
