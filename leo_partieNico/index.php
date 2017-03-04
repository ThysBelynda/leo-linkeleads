<?php
    if(isset($_COOKIE['loginauto']))
    {

	include("config/config.php");

		$req = $bdd->prepare('SELECT id, firstname, lastname FROM membres WHERE email = :email AND password = :password');
		$req->execute(array(
			'email' => $_COOKIE['emailUser'],
			'password' => $_COOKIE['passwordUser']
		));
		$resultat = $req->fetch();
		
		session_start();
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['email'] = $_COOKIE['emailUser'];
		$_SESSION['firstname'] = $resultat['firstname'];
		$_SESSION['lastname'] = $resultat['lastname'];

		$req->closeCursor();
		header('Location: prospecter');
    }
?>

<!DOCTYPE HTML>
	<!-- Création : 18/02/2017 -->
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Leo - Linkeleads</title>
     <meta name="description" content="Leo - Votre automatisateur de prospection Linkedin">
     <meta name="author" content="Nicolas Froidefond">	
     <link rel="stylesheet" href="styleindex.css" type="text/css"/> 
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
   </head>
<body>


	<div id="popupConnexion">	
		<a href="index"><img src="img/close.png" id="closePopupConnexion" alt="Fermer" /></a>

		<form method="post" action="tmpconnexion.php" id="signInForm">
		
			<h3>Connexion</h3>
		
			<label for="emailUser">Email :</label>
			<input type="email" name="emailUser" id="emailUser" required />

			<label for="passwordUser">Mot de passe :</label>
			<input type="password" name="passwordUser" id="passwordUser" required />
			<p id="mdpOubli"><a class="lienBleu" id="lienMdpForgot" href="motdepasseoublie">Mot de passe oublié ?</a></p>


			<input type="submit" value="Se connecter" id="signInSubmit" />
			<div id="stayCo"><input type="checkbox" name="checkCookieConnexion" id="checkCo" checked/><label for="checkCo">Se souvenir de moi</label></div>

		</form>

		<p>Vous n'avez pas encore de compte ?<br /><a class="lienBleu" id="lienConnexionToInscription" href="inscription">Inscrivez-vous ici</a></p>

	</div>

	<div id="popupInscription">

		<a href="index"><img src="img/close.png" id="closePopupInscription" alt="Fermer" /></a>
	
		<form method="post" action="tmpinscription.php" id="signUpForm">
		
			<h3>S'inscrire</h3>	

			<label for="firstnameUser">Prénom :</label>
			<input type="text" name="firstnameUser" id="firstnameUser" required />

			<label for="lastnameUser">Nom :</label>
			<input type="text" name="lastnameUser" id="lastnameUser" required />

			<label for="emailUser">Email :</label>
			<input type="email" name="emailUser" id="emailUser" required />

			<label for="confirmationEmail">Confirmation Email :</label>
			<input type="email" name="confirmationEmail" id="confirmationEmail" required />

			<label for="passwordUser">Mot de passe :</label>
			<input type="password" name="passwordUser" required />

			<input type="submit" value="S'inscrire" id="signUpSubmit" />
		</form>

		<p>Vous avez déjà un compte ? <a href="connexion" id="lienInscriptionToConnexion" class="lienBleu">Connectez-vous</a></p>

	</div>

	<div id="motDePasseOublie">

		<a href="index"><img src="img/close.png" id="closePopupOublie" alt="Fermer" /></a>
	
		<form method="post" action="tmpmdpoublie.php" id="forgotForm">

			<h3 id="titleMdp">Mot de passe oublié :</h3>

			<p>Nous allons vous envoyer un nouveau mot de passe par Email.<br /><br />Vous pourrez changer ce nouveau mot de passe une fois connecté.</p>

			<label for="emailForgot">Email de connexion :</label>
			<input type="email" name="emailForgot" id="emailForgot" required />
			
			<input type="submit" value="Recevoir un nouveau mot de passe" id="forgotSubmit" />

		</form>

		<p>Si vous avez le moindre problème, contactez-nous :<br /><a href="" class="lienBleu">leo@linkeleads.com</a></p>

	</div>

	<div id="inscriptionValidee">
		
		<a href="index"><img src="img/close.png" id="closePopupValidee" alt="Fermer" /></a>
		<div id="pourlaforme">
			<h3 id="titleValidee">Inscription réussie !<h3>

			<p>Votre compte a bien été enregistré. Vous pouvez maintenant vous connecter.</p>
			<a href="connexion" id="lienImgLeo"><img src="img/leozer.png" id="imgValidee" alt="Leo vous souhaite la bienvenue" /></a>
		</div>
	</div>

	<div id="emailDeConfirmationEnvoye">

		<a href="index"><img src="img/close.png" id="closePopupValidee" alt="Fermer" /></a>
		<div id="pourlaforme">
			<p>Un email de confirmation vient d'être envoyé.</p>
			<p>N'oubliez pas de vérifier s'il n'a pas atteri dans vos spams.</p>
			<img src="img/leozer.png" id="imgValidee" alt="Leo vous souhaite la bienvenue" />
		</div>
	</div>
	

	<div id="shadow">

		<div id="headeraccueil">
			<div id="cercleLeo">
				<img src="img/leoindex.png" alt="Leo - Votre automatiseur de prospection Linkedin" id="leoIndex" />
			</div>
			<p>Bonjour, je suis Leo votre nouvel assistant commercial sur Linkedin. Et si on travaillait ensemble ?</p>
			<button id="boutonConnexion"><a href="" id="lienConnexion">Connexion</a></button>
		</div>

		<div id="firstbody">

			<h1>Trouvez de nouveaux clients grâce à Leo</h1>
			<p>Découvrez Leo, l'assistant commercial qui prospecte pour vous sur Linkedin</p>
			<div id="boutonInscription">
				<p><a href="" id="lienInscription">Inscription</a></p>
			</div>
	
		</div>

		<div id="secondbody">
		
			<h2>Pourquoi confier votre travail de prospection à Leo ?</h2>

			<p>Autonome, Leo décuple vos opportunités commerciales en démarchant à votre place les prospects que vous ciblez sur Linkedin. <strong>En travaillant avec Leo, vous gagnerez ainsi du temps et vous trouverez de nouveaux clients.</strong></p>

		</div>

		<?php include("includes/footer.php"); ?>

	</div>

	<script src="script/popupindex.js"></script>
	<script>

		<?php

	   if(isset($_GET['dezecozo']))
	   {
		 $_GET['dezecozo'] = (int) $_GET['dezecozo']; 

		if($_GET['dezecozo'] > 0 AND $_GET['dezecozo'] < 7)
		{
		?>

		var codeErreur = <?php echo json_encode($_GET['dezecozo']); ?>;

		var popupConnexionElt = document.getElementById("popupConnexion");
		var popupInscriptionElt = document.getElementById("popupInscription");
		var popupValideeElt = document.getElementById("inscriptionValidee");
		var popupMailConfirmElt = document.getElementById("emailDeConfirmationEnvoye");
		var ombreElt = document.getElementById("shadow");

		var signInFormElt = document.getElementById("signInForm");
		var signUpFormElt = document.getElementById("signUpForm");

		var codeErreurConnexion = 1;
		var codeErreurConfirmationMail = 2;
		var codeInscriptionValidee = 3;
		var codeInscriptionEchec = 4;
		var codeMailExistant = 5;
		var codeMailConfirmationEnvoye = 6;


		function messageErreurInscription (id, texte, marginBot) {
		
			var messageErreurElt = document.createElement("p");
			messageErreurElt.id = id;
			messageErreurElt.textContent = texte;

			messageErreurElt.style.color = 'red';
			messageErreurElt.style.textAlign = 'center';
			messageErreurElt.style.marginTop = '0px';
			
			var inputsSignUp = document.querySelectorAll("#signUpForm > input");
			for(var i = 0; i < inputsSignUp.length; i++)
			{
				inputsSignUp[i].style.marginBottom = "10px";
			}

			signUpFormElt.style.marginBottom = marginBot;
			signUpFormElt.appendChild(messageErreurElt);

			popupInscriptionElt.style.display = "block";
			ombreElt.style.opacity = "0.35";
		};


		if(codeErreur == codeErreurConnexion)
		{
			var erreurConnexionElt = document.createElement("p");
			erreurConnexionElt.id = 'messageErreurConnexion';
			erreurConnexionElt.textContent = 'Email ou mot de passe invalide !';
			erreurConnexionElt.style.color = 'red';
			erreurConnexionElt.style.textAlign = "center";

			signInFormElt.style.marginBottom = "10px";
			signInFormElt.appendChild(erreurConnexionElt);
			
			popupConnexionElt.style.display = "block";
			ombreElt.style.opacity = "0.35";
		}

		else if(codeErreur == codeErreurConfirmationMail)
		{
			messageErreurInscription('messageConfirmationMail', 'Les deux emails ne correspondent pas !', '30px');
		}

		else if(codeErreur == codeInscriptionValidee)
		{
			popupValideeElt.style.display = "block";
			ombreElt.style.opacity = "0.35";	
		}

		else if(codeErreur == codeInscriptionEchec)
		{
			messageErreurInscription('messageInscriptionEchec', 'L\'inscription a échouée. Veuillez réessayer plus tard.', '20px');
		}

		else if(codeErreur == codeMailExistant)
		{
			messageErreurInscription('messageMailExistant', 'Cette adresse email est déjà enregistrée pour un compte !', '20px');
		}
		
		else if(codeErreur == codeMailConfirmationEnvoye)
		{
			popupMailConfirmElt.style.display = "block";
			ombreElt.style.opacity = "0.35";	
		}

		<?php
		}
	   }
		?>

	</script>
</body>
</html>
