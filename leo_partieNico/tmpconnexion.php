<?php

	if(isset($_POST['emailUser']) AND isset($_POST['passwordUser']))
	{
		include("config/config.php");
			$pass_hache = sha1($_POST['passwordUser']);

			$req = $bdd->prepare('SELECT id, firstname, lastname FROM membres WHERE email = :email AND password = :password AND activation = :activation');
			$req->execute(array(
				'email' => $_POST['emailUser'],
				'password' => $pass_hache,
				'activation' => '1'
			));

			$resultat = $req->fetch();

			if(!$resultat)
			{
				header('Location: index.php?dezecozo=1');
			}
			else
			{
				session_start();
				$_SESSION['id'] = $resultat['id'];
				$_SESSION['email'] = $_POST['emailUser'];
				$_SESSION['firstname'] = $resultat['firstname'];
				$_SESSION['lastname'] = $resultat['lastname'];
				echo 'Connexion réussie !';

				if(!$_POST['checkCookieConnexion'])
				{
				}
				else
				{
					setcookie('emailUser', $_POST['emailUser'], time() + 365*24*43600, null, null, false, true);
					setcookie('passwordUser', $pass_hache, time() + 365*24*43600, null, null, false, true);

					setcookie('loginauto', 'ON', time() + 365*24*43600, null, null, false, true);
				}

			header('Location: prospecter');
			}
			

			$req->closeCursor();
		}
?>
