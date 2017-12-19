<?php //ouverture du script php
 include "fonction_php.php";

 
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
 <p>
        <form action="preparerBoisson.php" method="post">
        <p>Choix Boisson</p>
        <input type="radio" name="boisson" value="expresso" checked> Expresso<br>
        <input type="radio" name="boisson" value="cafeLong"> Café Long<br>
        <input type="radio" name="boisson" value="the"> Thé<br>
        <p>Nombre de Sucre</p>
        <input type="radio" name="sucre" value="0" checked> Sans<br>
        <input type="radio" name="sucre" value="1"> 1<br>
        <input type="radio" name="sucre" value="2"> 2<br>
        <input type="radio" name="sucre" value="3" > 3<br>
        <input type="radio" name="sucre" value="4"> 4<br>
        <input type="radio" name="sucre" value="5"> 5<br>
        <p></p>
        <input type="submit" value="Preparer" >

      </form> 
  </p>

  </p>
</body>
</html>