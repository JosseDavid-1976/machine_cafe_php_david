<?php

$nbrSucre = $_POST["sucre"];
$Boisson = $_POST["boisson"];
function expresso($nbrSucre){
  echo "<li>Expresso : 1*Eau,1*Café,".$nbrSucre."*sucre(s)</li>";
};
function cafeLong($nbrSucre){
  echo "<li>Café Long : 2*Eau,2*Café,".$nbrSucre."*sucre(s)</li>";
};
function the($nbrSucre){
  echo "<li>Thé : 1*Eau,1*Thé,".$nbrSucre."*sucre(s)</li>";
};


function preparerBoisson($Boisson,$nbrSucre){
    if ($Boisson === "expresso"){
      echo expresso($nbrSucre);
    }elseif ($Boisson === "cafeLong"){
      echo cafeLong($nbrSucre);
    }elseif ($Boisson === "the"){
      echo the($nbrSucre);
    }
    
  };
?>

<!DOCTYPE html><!--creation de mon block html-->
<html>
  <head>
  <title>preparerBoisson</title><!--titre de la page-->
  <meta charset="utf-8">
  
  </head>
  <body>
    <h1>Fonction php</h1><!--nom de la machine -->
  <p>
    <?=preparerBoisson($Boisson,$nbrSucre);?>
  </p>
  
</body>
</html>
