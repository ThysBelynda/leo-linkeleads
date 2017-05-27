<?php
include ('config/config.php');
include ('inscription.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Découvrez Leo, votre nouvel assistant virtuel de Prospection sur Linkedin</title>
    <meta name="description" content="Leo vous trouve de nouveaux clients en automatisant votre travail de prospection sur Linkedin. 30 jours d'essai gratuit !">
    <meta name="author" content="Belynda Thys">

    <title>Leo</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/Leoface.png" />
    <link rel="stylesheet" type="text/css" href="assets/sass/style.scss">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <script src="assets/bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" style="box-shadow: black 0 0 40px 5px;">
    <div class="navbar-header" id="head-machine">
        <a href="#"><img alt="alex" src="img/Leosmile.png" height="38" width="38"></a>
        <p id="nav-question-mobile">
            Bonjour je suis Leo, et si on travaillait ensemble ?
        </p>
    </div>
    <div class="navbar-text">
        Bonjour, je suis <p id="nav-leo">Leo</p>, je vous aide à trouver des clients sur Linkedin. Et si on commençait dès maintenant ?</p>
    </div>

    <div class="navbar-right" id="right-machine">
        <button class="btn navbar-btn try" id="try" type="button"><strong>Essayer gratuitement</strong></i></button>
    </div>
</nav>

<div class="header">
    <div class="row">
        <div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
            <div class="message" align="center">
                <h1>Trouvez de nouveaux clients avec Leo</h1>
                <p id="desc">Exploitez dès maintenant tout le potentiel commercial de Linkedin</p>
                <button id="try2" class="btn btn-pulse btn-lg try">Bénéficier d'un essai gratuit de 30 jours</button>
                <button id="try2-m" class="btn btn-lg try-m">Bénéficier d'un essai gratuit</button>
            </div>
        </div>
    </div>
</div>

<div class="leo" style="padding: 1% 0 2% 0;">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <div class="prospection" align="center">
                <h1>Découvrez <p id="leo">Leo</p>, l’assistant virtuel des commerciaux</h1>
                <div class="description">
                    Leo est un assistant virtuel développé pour aider les commerciaux et les business developer à se libérer du travail répétitif et chronophage de prospection pour qu’ils puissent se concentrer sur l’essentiel : le ciblage et le closing.
                    <br>
                    <strong>
                        En travaillant avec Leo, vous générerez des opportunités commerciales de façon récurrente.
                        <br>
                        A vous de transformer ces opportunités en clients.
                    </strong>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="linkedin" align="center" style="background-color: #eeeeee;">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <div class="levier" align="center">
                <h1 style="margin-bottom: 20px;">Réveillez la force commerciale de votre entreprise</h1>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="users">
                    <div>
                        <img src="img/loupe.png" width="80" height="80">
                    </div>
                    <p>Indiquez vos cibles <br> depuis votre profil Linkedin</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="time">
                    <div>
                        <img src="img/reseau.png" width="80" height="80">
                    </div>
                    <p>Utilisez notre technologie pour <br> contacter vos cibles automatiquement</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="messages">
                    <div>
                        <img src="img/chat.png" width="80" height="80">
                    </div>
                    <p>Transformez les prospects <br> intéressés en clients</p>
                </div>
            </div>
    </div>
</div>

<div class="linkedin" align="center" style="background-color: #eeeeee;">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <div class="levier" align="center">
                <h1 style="margin-bottom: 20px;">Améliorez vos performances commerciales</h1>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="users">
                    <div>
                        <img src="img/time.png" width="80" height="80">
                    </div>
                    <p>
                        Optimiser <br> votre temps de travail
                        <br>
                    </p>
                    <p style="font-size: 15px; padding: 0; font-weight: bold;">
                        Automatisez les actions à faible valeur ajoutée
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="time">
                    <div>
                        <img src="img/call.png" width="80" height="80">
                    </div>
                    <p>
                        Concentrez-vous <br> sur le closing et les ventes
                        <br>
                    </p>
                    <p style="font-size: 15px; padding: 0; font-weight: bold;">
                        Transformez les prospects intéressés en client
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="messages">
                    <div>
                        <img src="img/perform.png" width="80" height="80">
                    </div>
                    <p>
                        Développez <br> votre chiffre d’affaires
                        <br>
                    </p>
                    <p style="font-size: 15px; padding: 0; font-weight: bold;">

                        Démarchez jusqu’à 1000 cibles/mois
                    </p>
                </div>
            </div>
    </div>
</div>

<div class="linkedin" align="center" style="background-color: white;">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <div class="levier" align="center">
                <h1 style="margin-bottom: 20px;">Une technologie au service de votre force commerciale</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-sm-4 col-md-4 col-lg-2" style="width: 20%;">
                <div class="users">
                    <div>
                        <img src="img/circle.png" width="60" height="60">
                    </div>
                    <p>Visites de profils des cibles automatisées</p>
                    <p style="font-size: 15px; padding: 0; font-weight: bold;">
                        Faites-vous connaître de vos cibles
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2" style="width: 20%;">
                <div class="time">
                    <div>
                        <img src="img/trio.png" width="60" height="60">
                    </div>
                    <p>Demandes de mise en relation automatisées</p>
                    <p style="font-size: 15px; padding: 0; font-weight: bold;">
                        Agrandissez votre réseau et échangez avec vos cibles
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2" style="width: 20%;">
                <div class="messages">
                    <div>
                        <img src="img/notes.png" width="60" height="60">
                    </div>
                    <p>Envois de messages d’introduction personnalisés</p>
                    <p style="font-size: 15px; padding: 0; font-weight: bold;">
                        Entamez la conversation avec chacun de vos prospects
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2" style="width: 20%;">
                <div class="messages">
                    <div>
                        <img src="img/crm.png" width="60" height="60">
                    </div>
                    <p>CRM Linkedin intégré</p>
                    <p style="font-size: 15px; padding: 0; font-weight: bold;">
                        Gérez l’ensemble de votre travail commercial sur Linkedin
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2" style="width: 20%;">
                <div class="messages">
                    <div>
                        <img src="img/courrier.png" width="60" height="60">
                    </div>
                    <p>Extraction des fiches contact</p>
                    <p style="font-size: 15px; padding: 0; font-weight: bold;">
                        Menez d’autres actions commerciales (Emailing/Phoning)
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<!--
<div class="linkedin" align="center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <div class="levier" align="center">
                <h1>Pourquoi faire de <p id="linkedin">Linkedin</p> un levier commercial ?</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="users">
                <div class="profils">
                    <img src="img/user-7.png" width="40" height="40">
                </div>
                <p>Parce que vos cibles font partie des <strong>450 millions</strong> d'utilisateurs.</p>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="time">
                <div class="hourglass">
                    <img src="img/wait.png" width="40" height="40">
                </div>
                <p>Parce que vos cibles y passent en moyenne plus de <strong>3 heures</strong> /semaine.</p>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="messages">
                <div class="mail">
                    <img src="img/mail.png" width="40" height="40">
                </div>
                <p>Parce que vos cibles lisent <strong>93%</strong> des messages privés qu'ils recoivent.</p>
            </div>
        </div>
    </div>
</div>

<div class="missions" align="center">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <h1>Quelles sont les <p id="mi">missions</p> que Leo peut réaliser pour vous ?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="title" align="right">
                <img src="img/loupe.png" height="50" width="50">
                <p class="bold-consult">
                    Consulter des profils
                </p>
            </div>
            <div class="text" align="right">
                <p>Pour vous faire connaître de vos cibles.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="title" align="right">
                <img src="img/reseau.png" height="50" width="50">
                <p class="bold-consult">Entrer en relation</p>
            </div>
            <div class="text" align="right">
                <p>Pour élargir votre réseau professionnel.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="title" align="right">
                <img src="img/chat.png" height="50" width="50">
                <p class="bold-consult">Envoyer des messages</p>
            </div>
            <div class="text" align="right">
                <p>Pour présenter votre offre à votre cible.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="title" align="right">
                <img src="img/courrier.png" height="50" width="50">
                <p class="bold-consult">
                    Extraire des coordonnées
                </p>
            </div>
            <div class="text" align="right">
                <p>Pour mener des campagnes d'e-mailing ciblées.</p>
            </div>
        </div>
    </div>
</div>

<div class="comment" align="center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h1>Leo démarche jusqu'à <p id="perf">1000 prospects /mois</p> sur Linkedin !</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="one"> <p>1</p> </div>

            <div class="border"></div>

            <div class="two"> <p>2</p> </div>

            <div class="border"></div>

            <div class="three"> <p>3</p> </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="one-m"> <p>1</p> </div>
            <div class="stapes">
                <p>Indiquez à Leo les prospects que vous ciblez sur Linkedin</p>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="two-m"> <p>2</p> </div>
            <div class="stapes">
                <p>Indiquez à Leo les missions qu'il doit effectuer pour vous</p>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="three-m"> <p>3</p> </div>
            <div class="stapes">
                <p>Laissez travailler Leo, il vous reporte l'ensemble de ses actions</p>
            </div>
        </div>
    </div>

    <div class="screenshot">
        <img src="img/screenshot.png" width="80%" height="80%">
    </div>
</div>
-->

<div class="pricing" align="center">
    <h1>Un pricing simple et transparent </h1>

    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="junior">
                <div class="list">
                    <div class="test">
                        <h2>Start</h2>
                        <h5>Leo démarche pour vous jusqu'à</h5>
                        <h3 id="cent">100 clients /mois</h3>
                    </div>
                    <br>
                    <p>
                        Visites de profils cibles <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Mises en relation <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Envois de messages <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Reporting <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Extractions de coordonnées <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div id="j-price" class="juniorprice">
                <p> 19€ /mois</p>
                <div class="engagement">
                    <p>Sans engagement</p>
                </div>
            </div>
            <div id="j-price" class="juniorprice-m">
                <p> 19€ /mois</p>
                <div class="engagement">
                    <p>Sans engagement</p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="confirme">
                <div class="list">
                    <div class="test">
                        <h2>Pro</h2>
                        <h5>Leo démarche pour vous jusqu'à</h5>
                        <h3 id="cinq">500 clients /mois</h3>
                    </div>
                    <br>
                    <p>
                        Visites de profils cibles <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Mises en relation <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Envois de messages <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Reporting <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Extractions de coordonnées <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div id="c-price" class="confirmeprice">
                <p> 59€ /mois</p>
                <div class="engagement">
                    <p>Sans engagement</p>
                </div>
            </div>
            <div id="c-price" class="confirmeprice-m">
                <p> 59€ /mois</p>
                <div class="engagement">
                    <p>Sans engagement</p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="expert">
                <div class="list">
                    <h2>Business</h2>
                    <h5>Leo démarche pour vous jusqu'à</h5>
                    <h3 id="mille">1000 clients /mois</h3>
                    <br>
                    <p>
                        Visites de profils cibles <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Mises en relation <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Envois de messages <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Reporting <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        Extractions de coordonnées <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div id="e-price" class="expertprice">
                <p>99€ /mois</p>
                <div class="engagement">
                    <p>Sans engagement</p>
                </div>
            </div>
            <div id="e-price" class="expertprice-m">
                <p>99€ /mois</p>
                <div class="engagement">
                    <p>Sans engagement</p>
                </div>
            </div>
        </div>

    </div>

    <div class="gratis">
        <button id="try3" class="btn btn-lg">Essayer gratuitement pendant 30 jours et décider ensuite</button>
        <button id="try3-m" class="btn btn-lg">Bénéficier d'un essai gratuit de 30 jours</button>
    </div>
</div>

<div class="comment" align="center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 style="padding: 0;">Comment trouver de nouveaux clients grâce à Leo :</h1>
        </div>
    </div>

    <div class="screenshot">
        <img src="img/screenshot.png" width="80%" height="80%">
    </div>
</div>

<div id="last" align="center">
    <div class="row">
        <div class="col-sm-12">
            <div class="button-test-m">
                <button id="try4-m" type="button" class="btn btn-lg try-m">Bénéficier d'un essai gratuit</button>
                <p>À l'issue de cette période d'essai de 30 jours, vous déciderez de le garder ou non</p>
            </div>
        </div>
    </div>


    <div class="portrait">
        <div class="row">
            <div class="col-sm-12">
                <img src="img/Leosmile.png" height="145" width="145">
                <h1>Engagez-moi, c’est sans engagement.</h1>
            </div>
        </div>
    </div>
    <div class="button-test">
        <button id="try4" type="button" class="btn btn-lg try">Bénéficier d'un essai gratuit de 30 jours</button>
        <p>À l'issue de cette période d'essai, vous déciderez de le garder ou non</p>
    </div>
</div>

<div class="footer" align="center">
    <div class="row" style="margin: 0">
        <div class="col-sm-7 col-md-7 col-lg-5">
            <p>Leo est un assistant virtuel commercial développé par la société Linkeleads.</p>
        </div>
        <div class="col-sm-5 col-md-5 col-lg-7 contact">
            <a href="mailto:leo@linkeleads.com"><img src="img/gmail.png" height="22" width="22"></a>
            <a href="https://www.linkedin.com/in/leo-linkeleads/"  target="_blank"><img src="img/linkedin.png" height="22" width="22"></a>
        </div>
    </div>
</div>

<div class="footer-m" align="center">
    <div class="col-sm-5 col-md-5 col-lg-2">
        <a href="mailto:leo@linkeleads.com"><img src="img/gmail.png" height="22" width="22"></a>
        <a href="https://www.linkedin.com/in/leo-linkeleads/"><img src="img/linkedin.png" height="22" width="22"></a>
    </div>
    <div class="row" style="margin: 0">
        <div class="col-sm-7 col-md-7 col-lg-5">
            <p>Leo est un assistant virtuel commercial développé par la société Linkeleads.</p>
        </div>
    </div>
</div>


<div class="overlay">
    <div id="form">
        <button type="button" value="Close" id="close">x</button>
        <h3 align="left">Inscription</h3>
        <form action="index.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <label for="usr">Nom*</label>
                        <input class="form-control input-lg" name="name" type="text" id="userName" required>
                        <p id="error1" style="color: red; display: none">Veuillez renseigner ce champs</p>
                    </div>
                    <div class="col-xs-6">
                        <label for="usr">Prénom*</label>
                        <input class="form-control input-lg" name="firstname" type="text" id="userFirstname" required>
                        <p id="error2" style="color: red;display: none">Veuillez renseigner ce champs</p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12">
                        <label for="usr">Adresse mail*</label>
                        <input class="form-control input-lg" name="email" type="email" id="userEmail" required>
                        <p id="error3" style="color: red;display: none">Veuillez renseigner ce champs correctement</p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12">
                        <label for="usr">Confirmez votre adresse mail*</label>
                        <input class="form-control input-lg" name="confirmation" type="email" id="userEmail" required>
                        <p id="error3" style="color: red;display: none">Veuillez renseigner ce champs correctement</p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12">
                        <label for="usr">Téléphone</label>
                        <input class="form-control input-lg" name="telephone" type="tel" id="userTelephone">
                        <p id="error4" style="color: red;display: none">Veuillez renseigner ce champs correctement</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div id="valid">
                        <p>Votre inscription est validée. <br> Merci et à bientôt ! </p>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div id="leopouce">
                        <img src="img/Leobody.png" height="100" width="100">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div id="existing">L'adresse mail que vous avez rentrée est déjà enregistrée</div>
                </div>
                <div class="col-xs-9">
                    <div id="wrong">Veuillez reconfirmer votre adresse mail</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input class="btn btn-default" type="submit" value="Bénéficier d'un essai gratuit de 30 jours" id="submit">
                </div>
            </div>
        </form>
    </div>

    <div class="overlay">
        <div id="form-m">
            <button type="button" value="Close" id="close-m">x</button>
            <h3>Inscription</h3>
            <form action="index.php" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" placeholder="Nom" name="name" type="text" id="userName">
                            <p id="error1" style="color: red; display: none">Veuillez renseigner ce champs</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" placeholder="Prénom" name="firstname" type="text" id="userFirstname">
                            <p id="error2" style="color: red;display: none">Veuillez renseigner ce champs</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" placeholder="Adresse mail" name="email" type="email" id="userEmail">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" placeholder="Confirmez votre adresse mail" name="confirmation" type="email" id="userConf">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" placeholder="Téléphone" name="telephone" type="tel" id="userTelephone">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div id="valid-m">Votre inscription est validée. Merci, à bientôt !</div>
                        <div id="existing-m">L'adresse mail renseignée est déjà enregistrée</div>
                        <div id="wrong-m">Veuillez reconfirmer votre adresse mail</div>
                        <div id="empty-m">Attention, un ou plusieurs champs sont vides</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="btn btn-default" type="submit" value="Valider" id="submit-m">
                    </div>
                </div>
            </form>
        </div>

        <div id="overlay-back"></div>
        <div id="overlay"></div>

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/app.js"></script>

        <?php
        include ('validation.php');
        ?>
</body>
</html>

