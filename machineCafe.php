<?php //ouverture du script php
 include "fonction_php.php";
  

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
    
                  //////Etape 4////////

  


?>

<!DOCTYPE html><!--creation de mon block html-->
<html>
  <head>
  <title>Machine_Cafe_Php</title><!--titre de la page-->
  <meta charset="utf-8">
  
  </head>
  <body>
    <h1>MACHINE A CAFE</h1><!--nom de la machine -->
  <p>
  <ol><?php boisson($listeBoisson);?></ol><!--j'appelle ma fonction boisson et je lui mets en paramétre ma variable $listeBoisson pour afficher ma liste de boisson.je l'encadre par <ol> pour avpoir une liste ordonné numeroté à l'affichage-->

 <?= $message;?><br><!--j'appelle ma variable $message pour l'afficher -->

 <?=$date; ?><br><!--j'appele ma variable $date pour afficher la date et l'heure -->
 <?="Montant insérée : ".$inserCoin;?><!--j'appelle ma variable $inserCoin qui est concatener avec un string pour afficher le montant inséré  -->
 <!-- ETAPE 4 -->

 <?= preparerBoisson("expresso",$nbrSucre);?>
 <?= preparerBoisson("cafeLong",$nbrSucre);?>
 <?= preparerBoisson("thé",$nbrSucre);?>
  </p>
</body>
</html>