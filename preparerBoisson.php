<?php
 include "fonction_php.php";
 
?>


<!DOCTYPE html><!--creation de mon block html-->
<html>
  <head>
  <title>preparerBoisson</title><!--titre de la page-->
  <meta charset="utf-8">
  
  </head>
  <body>
    <h1>Préparer Boisson</h1><!--nom de la machine -->
  <p>
  <?= preparerBoisson("thé",$nbrSucre);?>
  <?= preparerBoisson("expresso",$nbrSucre);?>
  <?= preparerBoisson("cafeLong",$nbrSucre);?>
  </p>
</body>
</html>