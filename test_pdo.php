<?php
$bdd = new PDO("mysql:host=localhost;dbname=boissons;charset=utf8","david","Axel1+Lulu2",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//ratacher ma bdd a une page php je place en parametre de pdo la localisation du serveur le nom de ma bdd mon login et mon mots de passe
$reponse =  $bdd->query('SELECT*FROM boissons');
//$reponse = $bdd->prepare('SELECT*FROM boissons');
//$reponse->execute();
//while ($donnees = $reponse->fetch()){
 //   echo '<p>'.$donnees['code'].  ' - '. $donnees['name_boissons'] . '</p>'; 
//}
?>

</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test_pdo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <h1>Test Machine cafe php avec PDO</h1>
   <?php
    //$reponse =  $bdd->query('SELECT*FROM boissons');
    while ($donnees = $reponse->fetch()){
        echo '<p>'.$donnees['code'].  ' - '. $donnees['name_boissons']. ' - '.$donnees['price']. '</p>';
        echo $donnees['price'];
    }
   ?>

</body>
</html> 