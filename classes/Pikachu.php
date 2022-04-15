<?php
require_once 'Pokemon.php';
class Pikachu extends Pokemon{

  public function __construct($energyType, $naam, $health, $attacks, $weakness, $resistance, $opnonent){
    parent::__construct($energyType, $naam, $health, $attacks, $weakness, $resistance, $opnonent);
  }


}
