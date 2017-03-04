<!DOCTYPE HTML>
	<!-- Création : 26/02/2017 -->
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Le Boss - Linkeleads</title>
     <meta name="description" content="Leo - Votre automatisateur de prospection Linkedin">
     <meta name="author" content="Nicolas Froidefond">	
     <link rel="stylesheet" href="stylelukas.css" type="text/css"/> 
     <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png" />
   </head>
<body>

	<?php 
	
		if(isset($_POST['passwordLukas'])) 
		{		
			if($_POST['passwordLukas'] == 'lukaszer')
			{
				include("../config/config.php");
	?>

			<img src="../img/leozer.png" alt="Leozo" id="leoBossLeft" />		
			<img src="../img/leozer.png" alt="Leozo" id="leoBossRight" />		

			<div id="contentBoss">

				<h1>Hello Lukas !</h1>
				<div id="contentLukas">
					<p>Vous êtes bien sur la page du boss.</p>
					<p>Vous trouverez ci-dessous toutes les adresses e-mails récupérées lors du prélaunching.</p>
				</div>

				<div id="listeYanclis">
					<h2>Yanclis</h2>

					<div class="yanclis" id="topList">
						<p class="id">Id</p>
						<p class="prenom">Prénom</p>
						<p class="nom">Nom</p>
						<p class="email">Email</p>
					</div>		
				<?php
				$req = $bdd->query('SELECT * FROM prelaunching ORDER BY id');
				while ($donnees = $req->fetch())
				{
				?>
					<div class="yanclis">
						<p class="id"><?php echo htmlspecialchars($donnees['id']); ?></p>
						<p class="prenom"><?php echo htmlspecialchars($donnees['firstname']); ?></p>
						<p class="nom"><?php echo htmlspecialchars($donnees['name']); ?></p>
						<p class="email"><?php echo htmlspecialchars($donnees['email']); ?></p>
					</div>		
				<?php
				}
				$req->closeCursor();
				?>
				</div>

			</div>
	<?php
			}
			else
			{
	?>
				<p>Mot de passe incorrect !</p>
	<?php
				header('Location: lukas');
			}
		}
		else
		{
	?>
			<div id="contentDefault">
				<h1>La page du boss</h1>

				<form method="post" action="lukas">
					<p>Veuillez confirmer que vous êtes bien Mr. Thys.</p>

					<input type="password" name="passwordLukas" id="passLukas" />

					<input type="submit" value="Entrer" />

				</form>
			</div>
	<?php
		}
	?>

</body>
</html>
