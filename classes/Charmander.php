<?php
require_once 'Pokemon.php';
class Charmander extends Pokemon{

  public function __construct($energyType, $naam, $health, $attacks, $weakness, $resistance){
    parent::__construct($energyType, $naam, $health, $attacks, $weakness, $resistance);
  }


}
