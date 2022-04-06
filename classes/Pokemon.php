<?php
// Pokemon
// heeft een naam
// heeft een EnergyType
// heeft hitpoints (maximum health)
// heeft health die bij de geboorte gelijk is aan de waarde van de hitpoints
// heeft 1 of meerdere Attacks
// heeft een Weakness
// heeft een Resistance

// kan een andere Pokemon aanvallen met een Attack
// de schade van een Attack wordt vermenigvuldigd met de multiplier van de Weakness indien de EnergyType van de Weakness gelijk is aan de EnergyType van de aanvallende Pokemon
// de schade van een Attack wordt verminderd met de waarde van de Resistance indien de EnergyType van de Resistance gelijk is aan de EnergyType van de aanvallende Pokemon
// kan schade krijgen van een andere Pokemon als resultaat van een Attack
// de totale schade van een Attack wordt verminderd op de health van de Pokemon die wordt aangevallen

class Pokemon{
   public  $naam;
   public  $energyType;
   public  $health;
   public  $attacks;
   public  $wweakness;
   public  $resistance;
   public  $hitpoints;


  public function __construct($energyType, $naam, $health, $attacks, $weakness, $resistance, $hitpoints){
    $this->energyType = $energyType;
    $this->naam = $naam;
    $this->health = $health;
    $this->attacks = $attacks;
    $this->weakness =  $weakness;
    $this->resistance = $resistance;
    $this->hitpoints = $hitpoints;
  }
  protected function Attack(){
     return $this->naam;
  }
  public function Damage(){

  }


}
