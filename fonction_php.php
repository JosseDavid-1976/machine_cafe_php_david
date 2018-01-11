<?php
try
{
$bdd = new PDO("mysql:host=localhost;dbname=boissons;charset=utf8","david","Axel1+Lulu2",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse =  $bdd->query('SELECT*FROM boissons');
$listeBoisson = $bdd->query('SELECT name_boissons FROM boissons');
      while ($donnees = $listeBoisson->fetch()){
           // echo '<p>'.  ' - '. $donnees['name_boissons']. '</p>';
           echo " - ". $donnees["name_boissons"].'<br>';
      }
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}    
//$listeBoisson = array("Café","Chocolat","Capuchino","Thé");//creation d'une variable listeBoisson pour pouvoir la rappeller plus tard dans le code.je lui attribue un tableau avec le noms de mes boissons
//function boisson($Boissons){//comme j'ai crée un tableau pour l'afficher en entier il faut que je le parcours avec une boucle foreach.je crais une fonction pour ne pas incéré ma boucle dans le corps du html mais appeller la fonction
     // foreach ($Boissons as $UneBoisson) { 
      //  echo "<li>$UneBoisson</li>";
     // }
//};

$message = "En attente ";// création d'une variable message je lui attribu la chaine de caractére en attente
$gmt= date("H")+1;//création d'une variable gmt pour rajouter 1 heure pour le décalage horaire 
$date = date("d/m/Y- $gmt:i:s");// creation d'une variable date je lui attribu la fonction php date avec plusieurs paramétre pour pouvoir afficher la date et l'heure de la maniére dont je le souhaite et je rappelle ma variable gmt pour le decalage horaire
$inserCoin = 0;//creation d'une variable incercoin et je lui attribut la valeur 0

/*if (isset( $_POST["sucre"]) && isset($_POST["boisson"])){
    $nbrSucre = $_POST["sucre"];
    $Boisson = $_POST["boisson"];  
}*/
//$nbrSucre ="" ;
//$Boisson = "" ;
/*function expresso($nbrSucre){
  echo "<li>Expresso : 1*Eau,1*Café,".$nbrSucre."*sucre(s)</li>";
};
function cafeLong($nbrSucre){
  echo "<li>Café Long : 2*Eau,2*Café,".$nbrSucre."*sucre(s)</li>";
};
function the($nbrSucre){
  echo "<li>Thé : 1*Eau,1*Thé,".$nbrSucre."*sucre(s)</li>";
};*/
/*function preparerBoisson($Boisson,$nbrSucre){
    if ($Boisson === "expresso"){
      echo expresso($nbrSucre);
    }elseif ($Boisson === "cafeLong"){
     echo cafeLong($nbrSucre);
    }elseif ($Boisson === "the"){
      echo the($nbrSucre);
    }
};*/

  function affichage($texte,$data){
    if (isset( $_POST["sucre"]) && isset($_POST["boisson"])){
      $nbrSucre = $_POST["sucre"];
      $commandeBoisson = $_POST["boisson"]; 
      $texte = preparer($commandeBoisson,$nbrSucre,$data);
  }else{
    echo $texte;
  }
  };
 /* $recette = array("expresso"=> array("cafe"=>1,"eau"=>1),
                   "cafeLong"=> array("cafe"=>2,"eau"=>2),
                   "the"=> array("the"=>1,"eau"=>1));*/
                 
   function preparer($commandeBoisson,$nbrSucre,$data){ // inclus mon sql dans fonction pour connecter le tableau recette au bdd recette.
  //global $bdd;
    $recette = $data->prepare('SELECT name_ingredients,quantite_recipe   FROM ingredients 
   INNER JOIN recipe ON ingredients.id = recipe.ingredients_id
   INNER JOIN  boissons ON recipe.boissons_code = boissons.code
   WHERE name_boissons = ?');
   $recette -> execute(array($_POST["boisson"]));
   /* $recette = array("expresso"=> array("cafe"=>1,"eau"=>1),
    "cafeLong"=> array("cafe"=>2,"eau"=>2),
    "the"=> array("the"=>1,"eau"=>1));*/
    echo $commandeBoisson." : ";
    while ($recup_aff =  $recette->fetch()){
      echo $recup_aff["name_ingredients"]." : ";
      echo $recup_aff["quantite_recipe"]." "; 
    }
    $recette->closeCursor();
    echo "sucre : ".$nbrSucre ;
   };
   
   function addSale($data,$Boisson,$nbrSucre){
        
      $codeBoisson = $data ->prepare('SELECT code FROM boissons
      WHERE name_boissons = ? ');
      $codeBoisson -> execute(array($Boisson));
      $code = $codeBoisson->fetch();
     // echo $code["code"],$Boisson;
      $recSale = $data ->prepare('INSERT INTO `sale` (`boissons_code`, `sugar`, `id`, `date`) VALUES (?,?,NULL,NOW()) ');
      $recSale->execute(array($code["code"], $nbrSucre));

      $codeBoisson->closeCursor();
      $recSale->closeCursor();

    }
  function sugarStock($data,$nbrSucre){
  $decSugar = $data->prepare('UPDATE ingredients
  SET quantite=quantite - ? 
  WHERE name_ingredients="sugar"');
  $decSugar->execute(array($nbrSucre));
  };

  function ingredientStock($data,$Boisson){
    $recupRecette= $data->prepare('SELECT name_ingredients,quantite_recipe
    FROM ingredients
    INNER JOIN recipe ON ingredients.id = recipe.ingredients_id
    INNER JOIN  boissons ON recipe.boissons_code = boissons.code
    WHERE name_boissons="?"');
    $recupRecette->execute(array($Boisson));
    var_dump($recupRecette);
var_dump($Boisson);
    $decIngredients= $data->prepare('UPDATE ingredients
    SET quantite=quantite - ? 
    WHERE name_ingredients= ?');
   
    while ($mesIngredients=$recupRecette->fetch()){
    echo('ici');
      $decIngredients->execute(array($mesIngredients["quantite_recipe"],$mesIngredients["name_ingredients"]));
      var_dump($decIngredients);
echo $mesIngredients;
    };
      $decIngredients->closeCursor();
    $recupRecette->closeCursor();
    // Pour que cela fonction faire un fetchAll sur $recupRecette et apres a la place de la while faire une foreach sur resultat $recuprecette
  };
    
    if (isset( $_POST["sucre"]) && isset($_POST["boisson"])){
      //addSale($bdd,$_POST["boisson"],$_POST["sucre"]);
      addSale($bdd,$_POST["boisson"],$_POST["sucre"]);
      sugarStock($bdd,$_POST["sucre"]);
      ingredientStock($bdd,$_POST["boisson"]);
    };

  
?>

