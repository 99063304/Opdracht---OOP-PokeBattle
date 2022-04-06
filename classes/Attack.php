<?php
 class Attack {
  public $naam;
  public $damage;

   public function __construct($naam, $schade)
     {
         $this->naam = $naam;
         $this->schade = $schade;
     }
 }
