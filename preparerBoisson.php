<?php
 include "fonction_php.php";
 
 ?>


<!DOCTYPE html><!--creation de mon block html-->
<html>
  <head>
  <title>preparerBois</title><!--titre de la page-->
  <meta charset="utf-8">
  
  </head>
  <body>
    <h1>Préparer Boisson</h1><!--nom de la machine -->
    <?=preparerBoisson($Boisson,$nbrSucre);?>
</body>
</html>