<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<head>
	<title> Page Inscription </title>
</head>
<body>

<?php 
 			$servername = "projetpro";
            $db_name = "users";
            $username = "root";
            $password = '';

	try{

$conn = new PDO("mysql:host=localhost;dbname=projetpro",$username,$password);

	 	// On établit la connexion
           $conn = new mysqli_connect($servername, $username, $password, $db_name);  
         
            
         //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
          

    $requete = "INSERT INTO users(role_id,name,email,password) VALUES('2','$_POST[NOM]', '$_POST[PRENOM]', '$_POST[MAIL]' ,'$_POST[mdp])';";

    

$conn->exec($requete);
  echo "Nouveaux enregistrement ajoutés avec succés";
		}

		catch(Exception $e) {
	    	    die('Erreur : '.$e->getMessage());
		}

			$cnn->exec($requete) 	
        





 ?>


<a href="http://127.0.0.1:8000/admin/login"> Retour à la page d'accueil </a>

<h1 class="text-center fw-bold"> Inscription Infotools </h1>
<!-- SECTION Contact-->
<div class="Contact" id="Contact">
	<div class="bg-light">

			<br>

				<div class="horizontale-line"> </div>
				<br>


					<form class="formulaire" method="post" action="http://127.0.0.1:8000/admin/login">
						<div class="form_englobe">
							<div class="FORM-1">	
								<label for="NOM">  
									<!-- ICON -->
									<i class="fas fa-user"></i>  
								</label> 
									
								<input type="text" id="NOM" name="NOM" size="40" maxlength="20" autofocus="autofocus" placeholder="Noms" required="required"  />  
							</div>

							<div class="FORM-1">	
								<label for="PRENOM"> 
									<!-- ICON -->
									<i class="fas fa-user"></i>  
								 </label>  

								<input  type="text" id="PRENOM" name="PRENOM" size="40" maxlength="20" autofocus="autofocus" placeholder="Prénom" required="required" /> 
							</div>


							<div class="FORM-1">
								<label for="MAIL">
								 	<!-- ICON -->
								 	<i class="fas fa-at"></i>
								</label> 
								<input type="email" id="MAIL" name="MAIL" size="40" maxlength="40" placeholder="E-mail" required="required" /> 
							</div>
					
						<div class="FORM-1">
								<label for="mdp">
								 	<!-- ICON -->
								 	<i class="fas fa-at"></i>
								</label> 
								<input type="password" id="mdp" name="mdp" size="40" maxlength="40" placeholder="mot de passe" required="required" /> 
							</div>
				
							
					

							<div class="d-flex justify-content-center w-100"> <input class="FORM-BOUTON w-25" type="submit" value="Envoyer">  </div>


<br>
							</div>
						</form>
			

	</div>
</div>




</body>
</html>

