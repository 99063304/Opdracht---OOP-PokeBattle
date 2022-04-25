<?php
 require_once 'classes/Pokemon.php';
 require_once 'classes/Pikachu.php';
 require_once 'classes/Charmander.php';
 require_once 'classes/Attack.php';
 require_once 'classes/Weaknes.php';
 require_once 'classes/Resistance.php';
 require_once 'classes/EnergyType.php';

  $pikachuAtack = new Attack('Bolt',40);
  $pikachuWeaknes = new Weaknes('Fire',1.5);
  $pikachuResistance = new Resistance('Fighting',20);
  $pikachuEnergytype = new EnergyType('Lightning');

  $charmanderAtack = new Attack('Flare',30);
  $charmanderWeaknes = new Weaknes('Water',2);
  $charmanderResistance = new Resistance('Lightning',10);
  $charmanderEnergytype = new EnergyType('Fire');


   $pikachu = new Pikachu($pikachuEnergytype,'pikachu',333,$pikachuAtack,$pikachuWeaknes,$pikachuResistance);
   $charmander = new Charmander($charmanderEnergytype,'charmander',333,$charmanderAtack,$charmanderWeaknes,$charmanderResistance);



function gevecht($firstOP,$secondOP){
  echo $secondOP->naam . ' Health: '. $secondOP->health.'<br>';
  echo $firstOP->Attacker($secondOP) .'<br>';
  echo $secondOP->naam . ' Health: '.$secondOP->health.'<br>';

  echo $firstOP->naam . ' Health: '. $firstOP->health.'<br>';
  echo $secondOP->Attacker($firstOP) .'<br>';
  echo $firstOP->naam . ' Health: '.$firstOP->health.'<br>';
}

gevecht($pikachu,$charmander);
gevecht($pikachu,$charmander);
gevecht($pikachu,$charmander);
gevecht($pikachu,$charmander);
gevecht($pikachu,$charmander);
gevecht($pikachu,$charmander);


            echo Pokemon::getPopulation();

 ?>
