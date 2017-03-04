<?php session_start(); 
	if(isset($_SESSION['id']))
	{

		include("config/config.php");

		$requete = $bdd->prepare('SELECT rank FROM membres WHERE id = :id');
		$requete->execute(array(
			'id' => $_SESSION['id']
		));

		$resultat = $requete->fetch();
?>

<!DOCTYPE HTML>
	<!-- Création : 15/02/2017 -->
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Leo - Paramètres</title>
     <meta name="description" content="Leo - Votre automatisateur de prospection Linkedin">
     <meta name="author" content="Nicolas Froidefond">	
     <link rel="stylesheet" href="styleworkstation.css" type="text/css"/> 
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
   </head>
<body>

	<?php include("includes/header.php"); ?>

	<div id="menuParametres">
		<a href="" class="interdit"><p id="lienInfosCompte" class="liensParametres">Informations liées à Leo</p></a>
		<a href="" class="interdit"><p id="lienFonctionnementLeo" class="liensParametres">Fonctionnement de Leo</p></a>
		<a href="" class="interdit"><p id="lienFacturesCB" class="liensParametres">Abonnement et facturation</p></a>
	</div>

	<div id="deconnexion" class="contentParametres">

		<a href="logout.php"><img src="img/leozer.png" alt="Se déconnecter" id="imgDeconnexion" /></a>

		<div id="boutonDeconnexion">
			<p><a id="lienDeconnexion" href="logout.php">Se déconnecter</a></p>
		</div>
	</div>

	<div id="infosCompte" class="contentParametres">

		<div id="modifierInfos">
			<div id="modifierEmail">
				<h3 class="titreModif">Modifier votre Email de connexion</h3>
				<form method="post" action="tmpmodifemail.php" class="formModif">
			
				   <div class="alignGauche">	
					<label for="emailActuel">Email de connexion actuel :</label><br/>
					<input type="email" name="emailActuel" id="emailActuel" required /><br/>
	
					<label for="nouvelEmail">Nouvel Email de connexion :</label><br/>
					<input type="email" name="nouvelEmail" id="nouvelEmail" required /><br/>

					<label for="confirmerEmail">Confirmer le nouvel Email :</label><br/>
					<input type="email" name="confirmerEmail" id="confirmerEmail" required /><br/>
				   </div>

					<input type="submit" value="Enregistrer" /> 	
				</form>
	
			</div>

			<div id="modifierPassword">
				<h3 class="titreModif">Modifier votre Mot de Passe</h3>
				<form method="post" action="tmpmodifmdp.php" class="formModif">

				   <div class="alignGauche">
					<label for="passwordActuel">Mot de passe actuel :</label><br/>
					<input type="password" name="passwordActuel" id="passwordActuel" required /><br/>
				
					<label for="nouveauPassword">Nouveau Mot de passe :</label><br/>
					<input type="password" name="nouveauPassword" id="nouveauPassword" required /><br/>

					<label for="confirmerPassword">Confirmer le nouveau Mot de passe :</label><br/>
					<input type="password" name="confirmerPassword" id="confirmerPassword" required /><br/>
				  </div>

					<input type="submit" value="Enregistrer">
				</form>
			</div>
		</div>
	</div>


	<div id="fonctionnementLeo" class="contentParametres">

		<h2 id="fonctionLeo">Voici comment fonctionne Leo :</h2>

		<ul id="explicationsFonctions">
			<li>En fonction de votre abonnement, vous pouvez demander à Leo de démarcher pour vous jusqu'à 500 ou 1000 prospects par mois. <a id="lienAideVideo" href="aide.php"><em class="emFonctionLeo">Tuto video</em></a></li>

			<li>Il visitera pour vous les profils de vos prospects. Ils recevront ainsi une notification les avertissant que vous avez visité leurs profils. Nous vous conseillons de <em class="emFonctionLeo">rendre votre profil attractif</em> et de <em class="emFonctionLeo">rendre votre profil visible</em> en sélectionnant <em class="emFonctionLeo">« votre nom et titre de profil »</em> sur votre profil LinkedIn : « compte » => « préférences et confidentialité » => « confidentialité » => « options des vues de profil ».</li>

			<li>48h minimum après la visite de leurs profils, Leo enverra une invitation à vos prospects pour les inviter à rejoindre votre réseau (d'où l'importance de rendre votre profil attractif).</li>

			<li>Leo enverra ensuite un premier message (que vous aurez préalablement préparé dans l'onglet « message » ) aux prospects qui acceptront l'invitation.</li>

			<li>Leo reporte l'ensemble de ses actions dans le « reporting ».</li>
		</ul>

	</div>

	
	<div id="facturesCB" class="contentParametres">

			<div id="abonnement">
				<h3 class="titreFacturesCB">Votre abonnement : <?php
 				if($resultat['rank'] == 0)
				{
					echo "Période d'essai";
				}
				elseif($resultat['rank'] == 1)
				{
					echo "Leo Junior";
				}
				elseif($resultat['rank'] == 2)
				{
					echo "Leo Expert";
				}
				?></h3>

				<p class="txtAbo">Prospects pouvant être démarchés :</p>
					<ul class="listeAbo">
						<li><?php 
						if($resultat['rank'] == 0 || $resultat['rank'] == 1)
						{
							echo "500/mois";
						}
						elseif($resultat['rank'] == 2)
						{
							echo "1000/mois";
						}
						?></li>
					</ul>

				<p class="txtAbo">Missions pouvant être réalisées par Leo :</p>
					<ul class="listeAbo">
						<li>Visites de profils</li>
						<li>Envois d'invitations</li>
						<li>Envois de messages</li>
						<li>Extraction des coordonnées</li>
						<li>Reporting</li>
					</ul>

				<?php 
				if($resultat['rank'] == 0 || $resultat['rank'] == 1)
				{
				?>
				
					<a href="upgrade.php"><button class="boutonFactures">UPGRADE</button></a><br/>
				
				<?php
				}
				elseif($resultat['rank'] == 2)
				{
				?>
		
					<a href="upgrade.php"><button class="boutonFactures">CHANGER</button></a><br/>
	
				<?php
				}
				if($resultat['rank'] == 1 || $resultat['rank'] == 2)
				{
				?>				

					<button class="boutonFactures">RÉSILIER</button>

				<?php
				}
				?>
			</div>

			<div id="factures">
				<h3 class="titreFacturesCB">Vos factures :</h3>

			<ul>
				<li>XX€ le JJ/MM/AA : <a href="" class="dlpdf">télécharger (PDF)</a></li>
				<li>XX€ le JJ/MM/AA : <a href="" class="dlpdf">télécharger (PDF)</a></li>
				<li>XX€ le JJ/MM/AA : <a href="" class="dlpdf">télécharger (PDF)</a></li>
			</ul>
		
			</div>
	
			<div id="carteBancaire">
				<h3 class="titreFacturesCB">Changement de CB :</h3>

				<p>Actuellement : Aucune</p>

				<button class="boutonFactures">CHANGER DE CARTE BLEUE</button>
				
			</div>
	</div>

	<script src="script/menuparametres.js"></script>

	<script>

	<?php 
	if(isset($_GET['cozo']))
	{
	
		$_GET['cozo'] = (int) $_GET['cozo'];

	if($_GET['cozo'] > 0 AND $_GET['cozo'] < 9)
	{
	?>
		var codeRetour = <?php echo json_encode($_GET['cozo']); ?>;

		var infosCompteElt = document.getElementById("infosCompte");
		var lienInfosCompteElt = document.getElementById("lienInfosCompte");
		var modifierEmailElt = document.getElementById("modifierEmail");
		var modifierPasswordElt = document.getElementById("modifierPassword");
		var deconnexionElt = document.getElementById("deconnexion");

		var codeErreurTransitionEmail = 1;
		var codeErreurEmailIncorrect = 2;
		var codeErreurConfirmationEmail = 3;
		var codeErreurTransitionMdp = 4;
		var codeErreurMdpIncorrect = 5;
		var codeErreurConfirmationMdp = 6;
		var codeValidationEmail = 7;
		var codeValidationMdp = 8;

		if(codeRetour > 0 && codeRetour < 9)
		{
			infosCompteElt.style.display = "flex";
			deconnexionElt.style.display = "none";
			lienInfosCompte.style.color = "#7798FB";
			lienInfosCompte.style.fontWeight = "bold";
			lienInfosCompte.style.textDecoration = "underline";
		}


		function messageRetour (texte, daron, color) {
			var messageRetourElt = document.createElement("p");
			messageRetourElt.style.color = color;
			messageRetourElt.textContent = texte;
		
			daron.appendChild(messageRetourElt);
		};

		if(codeRetour == codeErreurTransitionEmail)
		{
			messageRetour("Les informations n'ont pas transité.", modifierEmailElt, "red");
		}
		else if(codeRetour == codeErreurEmailIncorrect)
		{
			messageRetour("L'Email saisi est incorrect.", modifierEmailElt, "red");
		}
		else if(codeRetour == codeErreurConfirmationEmail)
		{
			messageRetour("L'Email n'a pas été bien confirmé.", modifierEmailElt, "red");
		}
		else if(codeRetour == codeErreurTransitionMdp)
		{
			messageRetour("Les informations n'ont pas transité.", modifierPasswordElt, "red");
		}
		else if(codeRetour == codeErreurMdpIncorrect)
		{
			messageRetour("Le mot de passe saisi est incorrect.", modifierPasswordElt, "red");
		}
		else if(codeRetour == codeErreurConfirmationMdp)
		{
			messageRetour("Le mot de passe n'a pas été bien confirmé.", modifierPasswordElt, "red");
		}
		else if(codeRetour == codeValidationEmail)
		{
			messageRetour("L'email a bien été modifié !", modifierEmailElt, "green");
		}
		else if(codeRetour == codeValidationMdp)
		{
			messageRetour("Le mot de passe a bien été modifié !", modifierPasswordElt, "green");
		}

	<?php
	}
	}
	?>
	</script>
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
