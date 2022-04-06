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




  $pikachu = new Pikachu($pikachuEnergytype,'333','bolders',$pikachuAtack,$pikachuWeaknes,$pikachuResistance);
  echo $pikachu->naam;

  // parent::__construct($energyType, $naam, $health, $attacks, $weakness, $resistance, $hitpoints);

  // echo $pikachu->attacks;

  // echo $pikachu->Attack();

 // $result = "You win";
 $poke = array('charmander', 'pikachu', 'bulbasaur', 'squirtle','rattata' );
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['active']) && isset($_POST['active2'])) {

  }
  }


 ?>
 <!-- <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="style.css">

   </head>
   <body>
     <div class="container">
       <form action="index.php" method="post">

         <h1>PokeBattle</h1>

         <?php foreach ($poke as $key): ?>
           <img id="<?php echo $key ?>" onclick="select('<?php echo $key ;?>')" src="images/<?php echo $key; ?>.png" value='<?php echo $key ;?>'>
         <?php endforeach; ?>

         <h2>Versus</h2>

         <?php foreach ($poke as $key): ?>
           <img id="<?php echo $key ?>2" onclick="select2('<?php echo $key; ?>2')" src="images/<?php echo $key; ?>.png" value='<?php echo $key ;?>'>
         <?php endforeach; ?>


         <button type="submit" name="button">Battle</button>
      </form>
      <div class="resultaat">
        <?php if (isset($result)) {
           echo $result;
        } ?>
      </div>
     </div>
     <script type="text/javascript">

       var pokemons = ['charmander', 'pikachu', 'bulbasaur', 'squirtle','rattata'];
        function select(id) {
          var thisi = document.getElementById(id);

          for (var i = 0; i < pokemons.length; i++) {
            document.getElementById(pokemons[i]).style.backgroundColor = 'transparent';
            document.getElementById(pokemons[i]).value = 'null';
            document.getElementById(pokemons[i]).setAttribute("name", "null")
          }
          thisi.style.backgroundColor  = 'red';
          thisi.value = thisi.id;
          thisi.setAttribute("name", "active");
          check();
        }
        function select2(id) {
          var thisi = document.getElementById(id);

          for (var i = 0; i < pokemons.length; i++) {
            document.getElementById(pokemons[i]+'2').style.backgroundColor = 'transparent';
            document.getElementById(pokemons[i]+'2').value = 'null';
            document.getElementById(pokemons[i]+'2').setAttribute("name", "null")

          }
          thisi.style.backgroundColor  = 'red';
          thisi.value = thisi.id;
          thisi.setAttribute("name", "active2");

          check();
        }
         // function check() {
         //   if (true) {
         //
         //   }
         // }
     </script>
   </body>
 </html> -->
