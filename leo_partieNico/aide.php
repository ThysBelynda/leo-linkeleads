<?php session_start(); 
	if(isset($_SESSION['id']))
	{
		include("config/config.php");
?>

<!DOCTYPE HTML>
	<!-- Création : 13/02/2017 -->
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Leo - Aide</title>
     <meta name="description" content="Leo - Votre automatisateur de prospection Linkedin">
     <meta name="author" content="Nicolas Froidefond">	
     <link rel="stylesheet" href="styleworkstation.css" type="text/css"/> 
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
   </head>
<body>

	<?php include("includes/header.php"); ?>


	<div id="blocVideo">
		<div id="blocTitreVideo">
			<h2 id="titreVideo">Comment parfaitement utiliser Leo ?</h2>
		</div>

		<iframe id="faislemouv" src="https://www.youtube.com/embed/f0Be3L0vJBs" allowfullscreen></iframe>


	<p id="msgAide">Si besoin, contactez-moi sur Linkedin ou par Email. Je répondrai à vos questions ASAP ;)</p>

	<div id="blocContactAide">

		<img src="img/linkedinbleu.png" alt="LinkedIn" class="logoContact" />
		<p id="leolinkeleadsTxt">Leo Linkeleads</p>
		<img src="img/gmail.png" alt="Gmail" class="logoContact" />
		<p>leo@linkeleads.com</p>

	</div>

	</div>

</body>
</html>

<?php

	}
	else
	{
		header('Location: index');
	}
?>
