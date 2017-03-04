<?php session_start(); 
	if(isset($_SESSION['id']))
	{

	include("config/config.php");

		$requete = $bdd->prepare('SELECT message FROM membres WHERE id = :id');
		$requete->execute(array(
			'id' => $_SESSION['id']
		));
		$donnees = $requete->fetch();
?>

<!DOCTYPE HTML>
	<!-- Création : 09/02/2017 -->
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Leo - Message à configurer</title>
     <meta name="description" content="Leo - Votre automatisateur de prospection Linkedin">
     <meta name="author" content="Nicolas Froidefond">	
     <link rel="stylesheet" href="styleworkstation.css" type="text/css"/> 
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
   </head>
<body>

	<?php include("includes/header.php"); ?>

		<h1 id="title">Préparez le message à envoyer sur Linkedin</h1>

	<div id="content">
	
		<form method="post" action="tmpmessage.php" id="formSettings">

			<textarea name="messageEnregistre" id="messageEnregistre" required><?php echo htmlspecialchars($donnees['message']); ?></textarea>

			<input type="submit" value="Enregistrer" id="parametresSubmit" />
	
		</form>

		<div id="preFooter">
			<p>Leo envoie ce message à vos prospects lorsqu'ils acceptent votre invitation</p>
		</div>

	</div>

	<?php include("includes/footer.php"); ?>

</body>
</html>

<?php
		$requete->closeCursor();

	}
	else
	{
		header('Location: index');
	}
?>
