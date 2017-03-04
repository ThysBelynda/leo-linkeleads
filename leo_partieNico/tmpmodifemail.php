<?php
	session_start();

if(isset($_SESSION['id']))
{
	include("config/config.php");
	
	$requeteEmailActuel = $bdd->prepare('SELECT email FROM membres WHERE id = :id');
	$requeteEmailActuel->execute(array(
		'id' => $_SESSION['id']
	));

	$resultat = $requeteEmailActuel->fetch();

	if(isset($_POST['emailActuel']) AND isset($_POST['nouvelEmail']) AND isset($_POST['confirmerEmail']))
	{

		if($_POST['emailActuel'] == $resultat['email'])
		{
			if($_POST['nouvelEmail'] == $_POST['confirmerEmail'])
			{
			
				$requete = $bdd->prepare('UPDATE membres SET email = :nouvelEmail WHERE id = :id');
				$requete->execute(array(
					'nouvelEmail' => $_POST['nouvelEmail'],
					'id' => $_SESSION['id']
				));
				header('Location: parametres.php?cozo=7');
			}
			else
			{
				header('Location: parametres.php?cozo=3');
			}
		}
		else
		{
			header('Location: parametres.php?cozo=2');
		}
	}
	else
	{
		header('Location: parametres.php?cozo=1');
	}

	$requeteEmailActuel->closeCursor();
}

?>
