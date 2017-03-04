<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		include("config/config.php");
	
		$requete = $bdd->prepare('UPDATE membres SET comment_connu_leo = :connaissanceLeo WHERE id = :id');
		$requete->execute(array(
			'connaissanceLeo' => $_POST['reponseUser'],
			'id' => $_SESSION['id']
		));

	}

	header('Location: prospecter');
?>
