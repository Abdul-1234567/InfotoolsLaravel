<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

	<title> Page Contact </title>
</head>
<body>
		<h1 class="text-center"> Contact </h1>




	<title> Page Inscription </title>
		

<!-- SECTION Contact-->
<div class="Contact" id="Contact">
	<div class="bg-light">

			<br>

			<h1 class="Titre_contact fw-bold"> ME CONTACTER </h1>
				<br>
				<div class="horizontale-line"> </div>
				<br>


			<div class="fs-3 text-center">
				<p> Une question, une demande, un projet ou juste une envie d'en savoir un peu plus sur moi ? Contactez-moi !</p>
			</div>


					<form class="formulaire" method="post" action="mail.php">
						<div class="form_englobe">
							<div class="FORM-1">	
								<label for="NOM">  
									<!-- ICON -->
									<i class="fas fa-user"></i>  
								</label> 
									
								<input type="text" id="NOM" name="NOM" size="40" maxlength="20" autofocus="autofocus" placeholder="Nom" required="required"  />  
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
								<label for="OBJET">
								 	<!-- ICON -->
								</label> 
								<input type="text" id="OBJET" name="OBJET" size="40" maxlength="40" placeholder="Objet" /> 
							</div>

				
							<div class="FORM-2">
								<label  for="MESSAGE"> 
								<textarea   type="text" id="MESSAGE" name="MESSAGE" size="40" maxlength="200" placeholder="Message" required="required" /> </textarea>
							</div>
					

							<div class="d-flex justify-content-center w-100"> <input class="FORM-BOUTON w-25" type="submit" value="Envoyer"> </div>
<br>
							</div>
						</form>
						 


<?php
	if (isset($_POST['MESSAGE'])) 
		{ 
			$retour = mail('alkarshi.abdullrahman@gmail.com','Envoi depuis le formulaire issue du portfolio',$_POST['MESSAGE'],''."\r\n" .'Reply-to: ' . $_POST['MAIL']);
		if($retour)
				    echo '<p>Votre message a bien été envoyé.</p>';
   		 }
   		 ?>
			




	</div>
</div>



</body>
</html>

</body>
</html>