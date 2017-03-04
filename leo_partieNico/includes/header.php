<?php
	$requete = $bdd->prepare('SELECT rank, date_inscription FROM membres WHERE id = :id');
	$requete->execute(array(
		'id' => $_SESSION['id']
	));

	$resultat = $requete->fetch();

	$date_inscription = $resultat['date_inscription'];
	$date_today = date("Y-m-d");
	$aujourdhui = new DateTime();

?>

<header>

	<div id="icoLeft">
		<div id="backLeo">
			<img src="img/leoindex.png" alt="Leo - Votre automatiseur de prospection Linkedin" id="leoMenu" />
		</div>

		<div class="figureMenu">
			<a href="prospecter"><img src="img/Prospection.png" alt="Prospecter sur Linkedin" id="icoProspection" /></a><a href="prospecter" class="lienMenu"><p class="textMenu">PROSPECTION</p></a>
		</div>

		<div class="figureMenu">
			<a href="message"><img src="img/Message.png" alt="Configurer le message à envoyer aux prospects" class="icoMenu" id="icoMessage" /></a><a href="message" class="lienMenu"><p class="textMenu">MESSAGE</p></a>
		</div>

		<div class="figureMenu">
			<a href="reporting"><img src="img/Reporting.png" alt="Accédez aux résultats de votre prospection" class="icoMenu" id="icoReporting" /></a><a href="reporting" class="lienMenu"><p class="textMenu">REPORTING</p></a>
		</div>
	</div>

	<div id="icoRight">

		<div class="figureMenu">
			<a href="aide"><img src="img/Aide.png" alt="Vous désirez de l'aide ?" class="icoMenu" id="icoAide" /></a><a href="aide" class="lienMenu"><p class="textMenu" id="textAide">AIDE</p></a>
		</div>

		<div class="figureMenu">
			<a href="parametres"><img src="img/Parametres.png" alt="Paramétrez votre prospection ou votre compte" class="icoMenu" id="icoParametres" /></a><a href="parametres" class="lienMenu"><p class="textMenu">PARAMÈTRES</p></a>
		</div>

		<div id="situationCompte">
			<p id="identifiant"><?php echo htmlspecialchars($_SESSION['firstname']) . ' ' . htmlspecialchars($_SESSION['lastname']); ?></p>

			<?php
			if($resultat['rank'] == 0 AND strtotime($date_inscription) + 30*24*3600 <= strtotime($date_today))
			{
			?>
				<p id="rank">Période d'essai :<br/><strong>Expirée</strong></p>
			<?php
			}
			elseif($resultat['rank'] == 0 AND strtotime($date_inscription) + 30*24*3600 > strtotime($date_today))
			{
				$timestampzer = strtotime($date_inscription) + 28*24*3600;
				$date_expiration = date('Y-m-d', $timestampzer);
				$date_expirationObj = new DateTime($date_expiration);
				$temps_restant = $aujourdhui->diff($date_expirationObj);
				printf("<p id=\"rank\">Période d'essai :<br/>%s jours restants</p>", $temps_restant->d);

			}
			elseif($resultat['rank'] == 1)
			{
			?>
				<p id="rank">Leo Junior<br/>XX/500 prospects ce mois</p>
			<?php
			}
			elseif($resultat['rank'] == 2)
			{
			?>
				<p id="rank">Leo Expert<br/>XX/1000 prospects ce mois</p>
			<?php
			}
			?>

			<a href="upgrade"><button id="upgrade"><?php
				if($resultat['rank'] == 0 || $resultat['rank'] == 1)
				{
					echo "UPGRADE";
				}
				elseif($resultat['rank'] == 2)
				{
					echo "CHANGER";
				}
			?></button></a>
		</div>
	
	</div>

</header>


<?php
	$requete->closeCursor();

?>
