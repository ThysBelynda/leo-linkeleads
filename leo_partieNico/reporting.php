<?php session_start(); 
	if(isset($_SESSION['id']))
	{

	include("config/config.php");
?>

<!DOCTYPE HTML>
	<!-- Création : 13/02/2017 -->
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Leo - Reporting</title>
     <meta name="description" content="Leo - Votre automatisateur de prospection Linkedin">
     <meta name="author" content="Nicolas Froidefond">	
     <link rel="stylesheet" href="styleworkstationreporting.css" type="text/css"/> 
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
   </head>
<body>

	<?php include("includes/header.php"); ?>

		<h1 id="title">Reporting : X profils visités, Y invitations envoyées, Z messages envoyés, W emails obtenus</h1>

	<div id="cadreBoard">
		<table id="board">
			<tr>
				<th>Prénom</th>
				<th>Nom</th>
				<th>Entreprise</th>
				<th>Profession</th>
				<th>Area</th>
				<th>Visité ?</th>
				<th>Invitation envoyée ?</th>
				<th>Invitation acceptée ?</th>
				<th>Message envoyé ?</th>
				<th>Email</th>
				<th>Linkedin</th>
			</tr>
			<tr>
				<td>Lukas</td>
				<td>Thys</td>
				<td>XXXX</td>
				<td>Responsable de la chaîne de production</td>
				<td>Paris (France)</td>
				<td>Date</td>
				<td>Date</td>
				<td>Oui</td>
				<td>Date</td>
				<td class="emailBoard">lukasthys@</td>
				<td class="linkedinBoard">http://localhost.fr/</td>
			</tr>

			<?php
				for($i = 0; $i < 10 ; $i++)
				{
			?>
			<tr>
				<td>Lukas</td>
				<td>Thys</td>
				<td>XXXX</td>
				<td>Co-founder</td>
				<td>Paris (France)</td>
				<td>Date</td>
				<td>Date</td>
				<td>Oui</td>
				<td>Date</td>
				<td class="emailBoard">lukasthys@gmail.com</td>
				<td class="linkedinBoard">http://localhost.fr/</td>
			</tr>


			<?php
				}

			?>

		</table>
	</div>

	<button id="dlcsv">Upgrade pour télécharger en format CSV</button>


	<?php include("includes/footer.php"); ?>

</body>
</html>

<?php

	}
	else
	{
		header('Location: index');
	}
?>
