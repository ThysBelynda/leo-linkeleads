<?php
	$messagePredefini = 'Bonjour {prenom},

Je suis Leo, votre nouvel assistant virtuel de prospection sur LinkedIn :	
    - Je visite les profils de vos prospects afin qu\'ils découvrent le votre,
    - J\'envoie des invitations pour élargir votre réseau professionnel,
    - J\'envoie des messages pour que vous puissiez vous présenter vous ou vos produits/services.
		
Le tout automatiquement. Grâce à moi, de nombreuses entreprises gagnent du temps et trouvent de nouveaux clients sur LinkedIn.

Donnez-moi une chance de vous montrer ce dont je suis capable : www.linkeleads.com. Prenez-moi à l\'essai gratuitement pendant 30 jours, vous ne le regretterez pas. ;)';
	$cle = md5(microtime(TRUE)*100000);

	include("config/config.php");

		if(isset($_POST['firstnameUser']) AND isset($_POST['lastnameUser']) AND isset($_POST['emailUser']) AND isset($_POST['passwordUser']) AND isset($_POST['confirmationEmail']))
		{

			if($_POST['emailUser'] != $_POST['confirmationEmail'])
			{
				header('Location: index.php?dezecozo=2');
			}

			else
			{
				$requeteVerifMail = $bdd->prepare('SELECT id FROM membres WHERE email = :email');
				$requeteVerifMail->execute(array(
					'email' => $_POST['emailUser']
				));
				
				$resultat = $requeteVerifMail->fetch();
				
				if(!$resultat)
				{
					$pass_hache = sha1($_POST['passwordUser']);

					$requeteFinale = $bdd->prepare('INSERT INTO membres (firstname, lastname, email, password, date_inscription, rank, message, cle) VALUES(:firstname, :lastname, :email, :password, NOW(), :rank, :message, :cle)');
					$requeteFinale->execute(array(
						'firstname' => $_POST['firstnameUser'],
						'lastname' => $_POST['lastnameUser'],
						'email' => $_POST['emailUser'],
						'password' => $pass_hache,
						'rank' => '0',
						'message' => $messagePredefini,
						'cle' => $cle
					));


					$destinataire = $_POST['emailUser'];
					$sujet = 'Linkeleads - Activation du compte';
					$entete = 'From: team@linkeleads.com';
					$message = 'Bienvenue sur Linkeleads,
	
	Pour activer votre compte, veuillez cliquer sur le lien ci dessous ou copier/coller dans votre navigateur internet.

	http://linkeleads.com/validation.php?log='.urlencode($_POST['emailUser']).'&cle='.urlencode($cle).'


------------
Ceci est un mail automatique. Merci de ne pas y répondre.';

					mail($destinataire, $sujet, $message, $entete);

					header('Location: index.php?dezecozo=6');
				}
				else
				{
					header('Location: index.php?dezecozo=5');		
				}
				$requeteVerifMail->closeCursor();	
			}
		}
		else
		{
			echo 'Les informations n\'ont pas été trouvées... Veuillez réessayer plus tard.';
			header('Location: index.php?dezecozo=4');
		}
?>
