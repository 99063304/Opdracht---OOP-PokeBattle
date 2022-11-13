<?php
 class Attack {
  private $naam;
  private $damage;

   public function __construct($naam, $schade)
     {
         $this->naam = $naam;
         $this->schade = $schade;
     }
     public function getNaam(){
        return $this->naam;
      }
      public function setNaam($naam){
         $this->naam = $naam;
      }
      public function getDamage(){
        return $this->damage;
      }
      public function setDamage($damage){
         $this->damage = $damage;
      }
 }
