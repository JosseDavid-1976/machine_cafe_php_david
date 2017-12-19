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
 
  </p>
  <p>
        <form action="fonction_php.php" method="post">
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
</body>
</html>