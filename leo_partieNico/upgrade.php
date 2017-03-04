<?php session_start(); 
	if(isset($_SESSION['id']))
	{
		include("config/config.php");
?>

<!DOCTYPE HTML>
	<!-- Création : 15/02/2017 -->
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Leo - Abonnement Linkeleads</title>
     <meta name="description" content="Leo - Votre automatisateur de prospection Linkedin">
     <meta name="author" content="Nicolas Froidefond">	
     <link rel="stylesheet" href="styleworkstation.css" type="text/css"/> 
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
   </head>
<body>

	<?php include("includes/header.php"); ?>


	<div id="wrapperUp">

		<div id="recommander">
			<div class="tete" id="teteRecommander">
				<h2 class="titreUpgrade">Recommander Leo</h2>
				<p class="txtTete">Pour poursuivre votre collaboration gratuitement 1 mois de plus</p>

			</div>

			<div class="corps" id="corpsRecommander">
				<p id="introRecommander">Si vous êtes satisfaits du travail de Leo, accordez-lui une note de 5 étoiles sur le Google Chrome Store ainsi qu'un commentaire.</p>
				<p class="txtRecommander">Une fois que c'est fait, envoyez un email à Leo lui disant que vous l'avez recommandé : leo@linkeleads.com</p>

				<p class="txtRecommander">En échange, vous pourrez poursuivre votre collaboration gratuitement pendant un mois de plus.</p>
			</div>

			<div class="pied" id="piedRecommander">
				<p>Recommander</p>
			</div>

		</div>

		<div id="junior">
			<div class="tete" id="teteJunior">
				<h2 class="titreUpgrade">Leo Junior</h2>
				<p class="txtTete"><strong>59€/mois</strong></p>
				<p class="txtTete">Sans engagement</p>
			</div>

			<div class="corps" id="corpsJunior">
				<p id="introJunior">Leo démarche pour vous jusqu'à<br/><strong>500 prospects/mois</strong></p>

				<div class="optionsDisponibles">
					<p>Reporting : <img src="img/valider.png" alt="checked" class="valider" /></p>
					<p>Visite de profils : <img src="img/valider.png" alt="checked" class="valider" /></p>
					<p>Mise en relation : <img src="img/valider.png" alt="checked" class="valider" /></p>
					<p>Envoi de messages : <img src="img/valider.png" alt="checked" class="valider" /></p>
					<p>Extraction des coordonnées : <img src="img/valider.png" alt="checked" class="valider" /></p>
				</div>

			</div>

			<div class="pied" id="piedJunior">
				<p>Choisir</p>
			</div>

		</div>

		<div id="expert">
			<div class="tete" id="teteExpert">
				<h2 class="titreUpgrade">Leo Expert</h2>
				<p class="txtTete"><strong>99€/mois</strong></p>
				<p class="txtTete">Sans engagement</p>

			</div>

			<div class="corps" id="corpsExpert">
				<p id="introExpert">Leo démarche pour vous jusqu'à<br/><strong>1000 prospects/mois</strong></p>

				<div class="optionsDisponibles">
					<p>Reporting : <img src="img/valider.png" alt="checked" class="valider" /></p>
					<p>Visite de profils : <img src="img/valider.png" alt="checked" class="valider" /></p>
					<p>Mise en relation : <img src="img/valider.png" alt="checked" class="valider" /></p>
					<p>Envoi de messages : <img src="img/valider.png" alt="checked" class="valider" /></p>
					<p>Extraction des coordonnées : <img src="img/valider.png" alt="checked" class="valider" /></p>
				</div>
			</div>

			<div class="pied" id="piedExpert">
				<p>Choisir</p>
			</div>

		</div>

	</div>

	<?php include("includes/footer.php"); ?>

</body>
</html>

<?php

	}
	else
	{
		header('Location: index');
	}
?>
