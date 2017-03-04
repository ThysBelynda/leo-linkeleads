<?php
	if(isset($_GET['cle']) AND isset($_GET['log']))
	{
		include("config/config.php");
		
		$cle = $_GET['cle'];
		$emailUser = $_GET['log'];

		$requeteVerifBdd = $bdd->prepare('SELECT cle, activation FROM membres WHERE email = :email');
		$requeteVerifBdd->execute(array(
			'email' => $emailUser
		));

		$resultat = $requeteVerifBdd->fetch();
		if(!$resultat)
		{
			echo "Veuillez réessayer la procédure, une erreur a été détectée dans le lien de confirmation.";
		}
		else
		{
			$cleBdd = $resultat['cle'];
			$etatActivation = $resultat['activation'];

			if($etatActivation == '1')
			{
				echo "Votre compte est déjà actif !";
			}
			else
			{
				if($cleBdd == $cle)
				{
					$requeteActivation = $bdd->prepare('UPDATE membres SET activation = 1 WHERE email = :email');
					$requeteActivation->execute(array(
						'email' => $emailUser
					));
					
					echo "Votre compte est validé ! Félicitations !";
					header('Location: index.php?dezecozo=3');
				}
				else
				{
					echo "Votre compte n'a pas pu être activé !";
				}
			}
		}
		$requeteVerifBdd->closeCursor();
	}
?>
