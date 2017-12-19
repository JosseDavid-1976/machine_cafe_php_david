<?php

$listeBoisson = array("Café","Chocolat","Capuchino","Thé");//creation d'une variable listeBoisson pour pouvoir la rappeller plus tard dans le code.je lui attribue un tableau avec le noms de mes boissons
function boisson($Boissons){//comme j'ai crée un tableau pour l'afficher en entier il faut que je le parcours avec une boucle foreach.je crais une fonction pour ne pas incéré ma boucle dans le corps du html mais appeller la fonction
      foreach ($Boissons as $UneBoisson) { 
        echo "<li>$UneBoisson</li>";
      }
};

$message = "En attente ";// création d'une variable message je lui attribu la chaine de caractére en attente
$gmt= date("H")+1;//création d'une variable gmt pour rajouter 1 heure pour le décalage horaire 
$date = date("d/m/Y- $gmt:i:s");// creation d'une variable date je lui attribu la fonction php date avec plusieurs paramétre pour pouvoir afficher la date et l'heure de la maniére dont je le souhaite et je rappelle ma variable gmt pour le decalage horaire
$inserCoin = 0;//creation d'une variable incercoin et je lui attribut la valeur 0

if (isset( $_POST["sucre"]) && isset($_POST["boisson"])){
    $nbrSucre = $_POST["sucre"];
    $Boisson = $_POST["boisson"];  
}


//$nbrSucre ="" ;
//$Boisson = "" ;
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

