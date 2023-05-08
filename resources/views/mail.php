<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title> Formulaire Inscription</title>
</head>

<body>

    <?php

    $serveur = "localhost";
    $user = "root";
    $pass = " ";	
            
    
//On essaie de se connecter
  try{
     $conn = new PDO("mysql:host=$serveur;dbname=projetpro" ,$user, $pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connexion réussie et Inscription Réussi.';


     $conn -> exec("Create database EXEMPLE");
     echo "Base de donnée créer";

     }

  catch(PDOException $e){
           echo "Erreur : " . $e->getMessage();
       }

    ?>


    


</body>
</html>