<?php session_start(); 
	if(isset($_SESSION['id']))
	{

	include("config/config.php");
?>

<!DOCTYPE HTML>
	<!-- Création : 09/02/2017 -->
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Leo - Prospecter</title>
     <meta name="description" content="Leo - Votre automatisateur de prospection Linkedin">
     <meta name="author" content="Nicolas Froidefond">	
     <link rel="stylesheet" href="styleworkstation.css" type="text/css"/> 
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
   </head>
<body>
<div id="shadow">

	<?php include("includes/header.php"); ?>

<div id="unSurTrois">

	<h1 id="title">1/3 : Indiquez vos cibles à Leo</h1>

	<div id="content">

		<div id="cadreLeo">
			<img src="img/leo.png" alt="Le grand Leo" id="imageLeo" />
			<div id="paragrapheLeoProspect">
				<p>Ok, il est temps de faire du business !</p>
				<p>Tout d'abord, recherchez vos cibles sur LinkedIn. Puis, cliquez sur mon visage à côté de leurs profils pour les ajouter à la liste de prospection ci-dessous.</p>
			</div>
		</div>

		<div id="tableauProspection">
			<div id="colonnesProspection">
				<table id="tableTH">
					<tr>
						<th class="prenom">Prenom</th>
						<th class="nom">Nom</th>
						<th class="entreprise">Entreprise</th>
						<th class="profession">Profession</th>
						<th class="croix">12/50</th>
					</tr>
				</table>
			</div>

			<div id="profilsRecoltes">
				<table id="tableTD">
					<tr>
						<td class="prenom">Lukas</td>
						<td class="nom">Thys</td>
						<td class="entreprise">DoYouBiz</td>
						<td class="profession">Co-fondateur &amp; CMO</td>
						<td class="croix"><img src="img/redcross.png" alt="Supprimer" class="redcross" /></td>
					</tr>

					<tr>
						<td class="prenom">Nicolas</td>
						<td class="nom">Froidefond</td>
						<td class="entreprise">Linkeleads</td>
						<td class="profession">Développeur</td>
						<td class="croix"><img src="img/redcross.png" alt="Supprimer" class="redcross" /></td>
					</tr>
					<tr>
						<td class="prenom">Redouane</td>
						<td class="nom">El Ghalbzouri</td>
						<td class="entreprise">SNECMA</td>
						<td class="profession">Ingénieur</td>
						<td class="croix"><img src="img/redcross.png" alt="Supprimer" class="redcross" /></td>
					</tr>
					<tr>
						<td class="prenom">Chanda</td>
						<td class="nom">Ampofo</td>
						<td class="entreprise">Dauphine</td>
						<td class="profession">Etudiante</td>
						<td class="croix"><img src="img/redcross.png" alt="Supprimer" class="redcross" /></td>
					</tr>
					<tr>
						<td class="prenom">Charlie</td>
						<td class="nom">Moreno</td>
						<td class="entreprise">Free-lance</td>
						<td class="profession">Steadycameur</td>
						<td class="croix"><img src="img/redcross.png" alt="Supprimer" class="redcross" /></td>
					</tr>
				</table>
			</div>
		</div>

		<button id="suivantProspecter">Valider et passer à l'étape suivante</button>

		<div id="preFooter">
			<p>Accédez à votre compte <span class="blueAndBold">Linkedin</span> et utiliser la fonction " rechercher "</p>
		</div>
	</div>
</div>

<div id="deuxSurTrois">

	<h1 id="title">2/3 : Précisez les missions de Leo</h1>
	
	<div id="content">

		<div id="cadreLeo">
			<img src="img/leo.png" alt="Le grand Leo" id="imageLeo" />
			<div id="paragrapheLeoProspect23">
				<p>Merci, je connais désormais les nouveaux prospects que je dois démarcher pour vous sur Linkedin.</p>
				<p>Que voulez-vous que je fasse ?</p>
			</div>
		</div>

		<div id="blocActions">

			<div id="blocVisite">
				<img src="img/infobulle2.png" alt="infosVisite" title="Pour vous faire connaître de vos prospects" class="infosActions" />

				<img src="img/visite.png" alt="Visiter les profils" class="imageAction" />

				<p class="txtBlocAction">Visiter leurs profils ?</p>

				<p class="selection" id="selectVisite">Sélectionner</p>
			</div>

			<div id="blocInvitation">
				<img src="img/infobulle2.png" alt="infosInvitation" title="Pour élargir votre réseau et récupérer les coordonnées de vos prospects" class="infosActions" />
				
				<img src="img/add.png" alt="Inviter les profils visités" class="imageAction" />

				<p class="txtBlocAction">Envoyer des invitations à rejoindre votre réseau ?</p>

				<p class="selection" id="selectInvit">Sélectionner</p>
			</div>


			<div id="blocMessage">
				<img src="img/infobulle2.png" alt="infosMessage" title="Pour engager la conversation, présenter votre offre, obtenir un RDV téléphonique..." class="infosActions" />
				
				<img src="img/messageaction.png" alt="Envoyer un message aux profils invités" id="imageMessage" class="imageAction" />

				<p class="txtBlocAction" id="txtActionMessage">Envoyer un 1<sup>er</sup> message après qu'ils aient accepté l'invitation ?</p>

				<p class="selection" id="selectMessage">Sélectionner</p>
			</div>
		</div>

		<div id="boutons23">
			<button id="boutonPrecedent23">Précédent</button><button id="boutonSuivant23">Suivant</button>
		</div>	
	
		<div id="preFooter">
			<p>Leo réalisera ces actions pour vous faire gagner du temps et des clients</p>
		</div>

	</div>
</div>

<div id="troisSurTrois">

	<h1 id="title">3/3 : Récapitulatif</h1>
	
	<div id="content">

		<div id="cadreLeo33">
			<img src="img/leo.png" alt="Le grand Leo" id="imageLeo33" />
			<div id="paragrapheLeoProspect33">
				<p>Ok, voici le récapitulatif :</p>
				<p>Je vais visiter les profils des XX prospects que vous ciblez. <span id="recapInvit">Je leur enverrai également une invitation à rejoindre votre réseau.</span> <span id="recapMessage">Enfin, je leur enverrai un 1<sup>er</sup> message lorsqu'ils accepteront l'invitation.</span></p>
				<p>J'ai hâte de commencer !</p>
			</div>
		</div>

		<p style="color: red;">Conditions pour que Leozo fonctionne</p>

		<div id="boutons33">
			<button id="boutonCommencer33">Commencer</button><button id="boutonPrecedent33">Précédent</button>
		</div>
	
		<div id="preFooter">
			<p id="txtPreFooter33">Vous pourrez suivre en détail l'ensemble des actions de Leo dans le Reporting</p>
		</div>
	</div>
</div>

<div id="leoIsWorking">

	<h1 id="title">Leo prospecte pour vous en ce moment</h1>
	
	<div id="content">

		<div id="cadreLeo33">
			<img src="img/leo.png" alt="Le grand Leo" id="imageLeo33" />
			<div id="paragrapheLeoProspect43">
				<p>Je démarche actuellement sur Linkedin les prospects que vous m'avez indiqués. Vous pouvez suivre mon travail sur le <a href="reporting.php"><span class="blueAndBold">reporting</span></a>.</p>
				<p>Sachez que vous pouvez encore m'indiquer <span class="blueAndBold">ZZZ</span> prospects à démarcher ce mois-ci. Plus vous m'indiquerez de prospects, plus je vous créerai d'opportunités commerciales ;)</p>
			</div>
		</div>


		<div id="boutons43">
			<button id="boutonReporting43"><a href="reporting">Accéder au reporting</a></button><button id="boutonRecommencer43">Indiquer à Leo de nouveaux prospects à démarcher</button>
		</div>
	
		<div id="preFooter">
			<p id="txtPreFooter33">Assurez-vous que vous êtes bien <span class="blueAndBold">connectés à votre compte Linkedin</span> pour que Leo puisse travailler.</p>
		</div>

	</div>
</div>



	<?php include("includes/footer.php"); ?>

</div>

		<div id="popupconnaissanceleo">

			<form method="post" action="tmpconnaissance.php" id="connaissanceForm">
				<h3 id="titleConnaissance">Avant de commencer, pourriez-vous nous indiquer comment vous avez connu Leo ?</h3>
		
				<div class="flexrow">
					<input type="radio" name="reponseUser" value="1" id="emailDeLeo" /><label for="emailDeLeo">J'ai reçu un email de sa part</label>
				</div>
				<div class="flexrow">
					<input type="radio" name="reponseUser" value="2" id="leoDemandeLinkedin" /><label for="leoDemandeLinkedin">Il m'a contacté sur Linkedin</label>
				</div>
	
				<div class="flexrow">
					<input type="radio" name="reponseUser" value="3" id="boucheOreille" /><label for="boucheOreille">Bouche à oreille</label>
				</div>

				<div class="flexrow">
					<input type="radio" name="reponseUser" value="4" id="autre" /><label for="autre">Autre</label>
				</div>

				<input type="submit" value="Commencer" id="connaissanceSubmit" />
			</form>

		</div>

		<script src="script/prospecteractions.js"></script>
		<script>
			<?php
			$requete = $bdd->prepare('SELECT comment_connu_leo FROM membres WHERE id = :id');
			$requete->execute(array(
				'id' => $_SESSION['id']
			));

			$resultat = $requete->fetch();

			if($resultat['comment_connu_leo'] != '0')
			{
				$dejaRepondu = 1;
			?>
				var popupConnaissanceLeoElt = document.getElementById("popupconnaissanceleo");
				var ombreElt = document.getElementById("shadow");

				var dejaRepondu = <?php echo json_encode($dejaRepondu); ?>;

				if(dejaRepondu == '1')
				{
					popupConnaissanceLeoElt.style.display = "none";
					ombreElt.style.opacity = "1";	
				}
		</script>
</body>
</html>
<?php
			}
			$requete->closeCursor();
	}
	else
	{
		header('Location: index');
	}
?>
