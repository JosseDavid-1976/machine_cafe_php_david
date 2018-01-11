<?php //ouverture du script php
 include "fonction_php.php";?>
 
  

<!DOCTYPE html><!--creation de mon block html-->
<html>
  <head>
  <title>Machine_Cafe_Php</title><!--titre de la page-->
  <meta charset="utf-8">
  
  </head>
  <body>
    <h1>MACHINE A CAFE</h1><!--nom de la machine -->
  <p>
  <!--<ol><?php // boisson($listeBoisson);?></ol>--><!--j'appelle ma fonction boisson et je lui mets en paramétre ma variable $listeBoisson pour afficher ma liste de boisson.je l'encadre par <ol> pour avpoir une liste ordonné numeroté à l'affichage-->
  
  <?= affichage($message,$bdd);?> <br><!--j'appelle ma variable $message pour l'afficher -->

 <?=$date; ?><br><!--j'appele ma variable $date pour afficher la date et l'heure -->
 <?="Montant insérée : ".$inserCoin;?><!--j'appelle ma variable $inserCoin qui est concatener avec un string pour afficher le montant inséré  -->
 
 
 <!-- ETAPE 4 -->
 <p>
        <form action="machineCafe.php" method="post">
        <p>Choix Boisson</p>
        <input type="radio" name="boisson" value="expresso" checked> Expresso<br>
        <input type="radio" name="boisson" value="double_expresso"> Double Expresso<br>
        <input type="radio" name="boisson" value="tea"> Thé<br>
        <input type="radio" name="boisson" value="chocolate"> Chocolat<br>
        <input type="radio" name="boisson" value="CoffeeMilk"> Latté<br>
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
     

     <!-- <meta http-equiv="refresh" content="1; url=http://localhost/test/dos2/machine_cafe_php_david/machineCafe.php" />  -->
 </p>

</body>
</html>