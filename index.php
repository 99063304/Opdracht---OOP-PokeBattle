<?php
 require_once 'classes/Pokemon.php';
 require_once 'classes/Pikachu.php';
 require_once 'classes/Charmander.php';
 require_once 'classes/Attack.php';
 require_once 'classes/Weaknes.php';
 require_once 'classes/Resistance.php';
 require_once 'classes/EnergyType.php';

  $pikachuAtack = new Attack('Bolt','40');
  $pikachuWeaknes = new Weaknes('Fire','1,5');
  $pikachuResistance = new Resistance('Fighting','20');
  $pikachuEnergytype = new EnergyType('Lightning');

  $charmanderAtack = new Attack('Flare','30');
  $charmanderWeaknes = new Weaknes('Water','2');
  $charmanderResistance = new Resistance('Lightning','10');
  $charmanderEnergytype = new EnergyType('Fire');

  // $pokemon = new Pikachu('glass','333','bolders','dd','dd','ff');

  $charmander = new Charmander($charmanderEnergytype,'333','bolders',$charmanderAtack,$charmanderWeaknes,$charmanderResistance,'')

  $pikachu = new Pikachu($pikachuEnergytype,'333','bolders',$pikachuAtack,$pikachuWeaknes,$pikachuResistance,$charmander);
  // $pikachu->Attacker();




 ?>
