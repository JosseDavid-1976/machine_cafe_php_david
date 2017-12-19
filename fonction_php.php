<?php
$nbrSucre = 5;
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
    }elseif ($Boisson === "thé"){
      echo the($nbrSucre);
    }
    
  };
?>


