<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		include("config/config.php");

		$requete = $bdd->prepare('UPDATE membres SET message = :messageEnregistre WHERE id = :id');
		$requete->execute(array(
			'messageEnregistre' => $_POST['messageEnregistre'],
			'id' => $_SESSION['id']
		));

	}

	header('Location: message');
?>
