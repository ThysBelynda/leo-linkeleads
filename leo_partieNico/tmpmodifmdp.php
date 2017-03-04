<?php
	session_start();

if(isset($_SESSION['id']))
{
	include("config/config.php");
	
	$requetePasswordActuel = $bdd->prepare('SELECT password FROM membres WHERE id = :id');
	$requetePasswordActuel->execute(array(
		'id' => $_SESSION['id']
	));

	$resultat = $requetePasswordActuel->fetch();

	if(isset($_POST['nouveauPassword']) AND isset($_POST['passwordActuel']) AND isset($_POST['confirmerPassword']))
	{
		$passwordActuelCrypte = sha1($_POST['passwordActuel']);

		if($passwordActuelCrypte == $resultat['password'])
		{
			if($_POST['nouveauPassword'] == $_POST['confirmerPassword'])
			{
				$nouveauPasswordCrypte = sha1($_POST['nouveauPassword']);
			
				$requete = $bdd->prepare('UPDATE membres SET password = :nouveauPassword WHERE id = :id');
				$requete->execute(array(
					'nouveauPassword' => $nouveauPasswordCrypte,
					'id' => $_SESSION['id']
				));
				header('Location: parametres.php?cozo=8');
			}
			else
			{
				header('Location: parametres.php?cozo=6');
			}
		}
		else
		{
			header('Location: parametres.php?cozo=5');
		}
	}
	else
	{
		header('Location: parametres.php?cozo=4');
	}

	$requetePasswordActuel->closeCursor();
}

?>
