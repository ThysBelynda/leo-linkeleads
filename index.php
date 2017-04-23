<?php
include ('config/config.php');

if ( isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['confirmation']) && isset($_POST['telephone'])) {

    if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['confirmation'])) {

        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $confirmation = $_POST['confirmation'];
        $telephone = $_POST['telephone'];

        $sqlEmails = 'SELECT id FROM prelaunching WHERE email = :email';

        $reqCheckEmails = $db->prepare($sqlEmails);
        $reqCheckEmails->execute(
            array(
                'email' => $email
            )
        );

        $result = $reqCheckEmails->fetch();


        if ($email == $confirmation) {
            if (!$result) {

                $sql = 'INSERT INTO prelaunching(name, firstname, email, telephone) VALUES (:name, :firstname, :email, :telephone)';

                $req = $db->prepare($sql);
                $req->execute(
                    array(
                        'name' => $name,
                        'firstname' => $firstname,
                        'email' => $email,
                        'telephone' => $telephone
                    )
                );

                $destinataire = $_POST['email'] . ', ';
                //$destinataire .= 'bely.thys@gmail.com';

                $sujet = 'Confirmation de votre inscription';

                $entete  = 'MIME-Version: 1.0' . "\r\n";
                $entete .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $entete .= 'From: team@linkeleads.com' . "\r\n";
                $entete .= 'Bcc: leo@linkeleads.com' . "\r\n";
                //$entete .= 'Bcc: bely.thys@gmail.com' . "\r\n";


                $message = '
                
                <html>
                  <body>
                   <p>Bonjour,<br><br>
                
Nous terminons actuellement le développement de Leo, votre futur assistant commercial intelligent sur Linkedin. La date de sortie officielle est prévu pour le <b><u>22 mai 2017.</u></b><br><br>
    
Vous serez automatiquement averti par email et vous recevrez un <b><u>code promo</u></b> qui vous permettra d\'utiliser en exclusivité Leo gratuitement pendant un mois. <br><br>

Si vous avez des questions, vous pouvez contacter directement Leo par email : leo@linkeleads.com<br>
Il vous répondra ASAP ;) <br><br>

Nous vous remercions pour votre inscription,<br><br>
A très bientôt,<br><br><br><br>
                
------------<br>
Ceci est un mail automatique. Merci de ne pas y répondre.
               </p>
                  
                  </body>
                 </html>

                ';

                mail($destinataire, $sujet, $message, $entete);

                header('Location: index.php?valid=1');

            } else {
                header('Location: index.php?valid=2');
            }
        } else {
            header('Location: index.php?valid=3');
        }
    } else {
        header('Location: index.php?valid=0');
    }
}
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

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header" id="head-machine">
            <a href="#"><img alt="alex" src="img/Leosmile.png" height="38" width="38"></a>
            <p id="nav-question-mobile">
                Bonjour je suis Leo, et si on travaillait ensemble ?
            </p>
        </div>
        <div class="navbar-text">
            Bonjour, je suis <p id="nav-leo">Leo</p> votre nouvel assistant commercial, <p id="nav-question">et si on travaillait ensemble ?</p>
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
                    <p id="desc">Découvrez Leo, l'assistant virtuel de prospection commerciale sur Linkedin</p>
                    <button id="try2" class="btn btn-pulse btn-lg try">Bénéficier d'un essai gratuit de 30 jours</button>
                    <button id="try2-m" class="btn btn-lg try-m">Bénéficier d'un essai gratuit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="leo">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
                <div class="prospection" align="center">
                    <h1>Pourquoi confier vos actions de prospection à <p id="leo">Leo</p> ?</h1>
                    <div class="description">
                        Autonome, Leo décuple vos opportunités commerciales en démarchant à votre place vos cibles sur Linkedin.
                        <p id="bold-prospect">En travaillant avec Leo, vous gagnerez ainsi du temps, et vous trouverez de nouveaux clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!--<button type="button" value="Close" id="close" style="float: right">x</button>-->

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

                <!--<div id="existing" style="margin-left:30px; display: none; color: red;">L'e-mail que vous avez rentré existe déjà.</div>-->
                <!--<div id="wrong" style="margin-left:30px; display: none; color: red;">Les deux adresses mails rentrées ne correspondent pas</div>-->
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


                <!--<button name="submitForm" type="submit" value="Envoyer" id="submit">Envoyer</button>-->
                <!--<button name="submitForm" type="button" value="Envoyer" id="button" style="display: none">Envoyer</button>-->
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

                    <!--<div id="existing" style="margin-left:30px; display: none; color: red;">L'e-mail que vous avez rentré existe déjà.</div>-->
                    <!--<div id="wrong" style="margin-left:30px; display: none; color: red;">Les deux adresses mails rentrées ne correspondent pas</div>-->

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
                    <!--<button name="submitForm" type="submit" value="Envoyer" id="submit">Envoyer</button>-->
                    <!--<button name="submitForm" type="button" value="Envoyer" id="button" style="display: none">Envoyer</button>-->
                </form>
            </div>

            <script>
                // if ($( document ).width() <= 320) {
                //   $('input').removeClass('.form-control input-lg').addClass('.form-control input-sm');
                // }
            </script>


            <div id="overlay-back"></div>
            <div id="overlay"></div>

            <script>

                $('#close').on('click', function () {
                    $('#overlay, #overlay-back').fadeOut(600);
                    $('#form').hide();
                    $('#close').hide();
                    $('#submit').show();
                });

                $('#close-m').on('click', function () {
                    $('#overlay, #overlay-back').fadeOut(600);
                    $('#form-m').hide();
                    $('#close').hide();
                    $('#submit-m').show();
                });

                $('.try').on('click', function () {
                    $('#overlay, #overlay-back').fadeIn(600);
                    $('#form').show('fade');
                    $('#close').show('fade');
                    $('#valid').remove();
                    $('#leopouce').remove();
                });

                if ($('#userEmail') == ''){
                    $('#submit-m').show();
                }

                $('.try-m').on('click', function () {
                    $('#overlay, #overlay-back').fadeIn(600);
                    $('#form-m').show('fade');
                    $('#close').show('fade');
                    $('#valid-m').remove();
                });

                //OUVRIR LA MODAL EN CLIQUANT SUR LE BOUTTON
                /*
                 $('#try').click(function(){
                 $('#form').show(200);
                 });

                 $('#close').click(function () {
                 $('#form').hide();
                 });

                 $('#closegreen').click(function () {
                 $('#pop').hide();
                 });*/

                //DESACTIVER LE BOUTTON SI TOUS LES CHAMPS NE SONT PAS REMPLIS
                /*$(document).ready(function(){
                 $('#submit').attr('disabled',true);
                 });

                 $('.test').keyup(function(){
                 if( ($("#userName").val() !=0) && ($("#userFirstname").val().length !=0) && ($("#userEmail").val().length !=0) ){
                 $('#submit').attr('disabled', false);
                 }

                 else{
                 $('#submit').attr('disabled',true);
                 }
                 });*/

                //TESTS
                //$( "#submit" ).prop( "disabled", true );

                /*$('#submit').click(function () {
                 if ($('#userName').val() == "") {
                 $('#error1').show();
                 } else {
                 $('#error1').hide();
                 }
                 })*/

            </script>

            <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    </body>
    </html>

<?php if ( isset($_GET['valid']) ) {

    $_GET['valid'] = (int)$_GET['valid'];

    if ($_GET['valid'] >= 0 AND $_GET['valid'] <= 3) {

        if ($_GET['valid'] == 3) {
            ?>
            <script>
                if ($(window).width() > 414) {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form').show();
                    $('#close').show('fade');
                    $('#wrong').show();
                } else {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form-m').show();
                    $('#close').show('fade');
                    $('#wrong-m').show();
                }
            </script>
            <?php

        } else if ($_GET['valid'] == 2) {
            ?>
            <script>
                if ($(window).width() > 414) {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form').show();
                    $('#close').show('fade');
                    $('#existing').show();
                } else {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form-m').show();
                    $('#close').show('fade');
                    $('#existing-m').show();
                }

            </script>
            <?php

        } else if ($_GET['valid'] == 1) {
            ?>
            <script>
                if ($(window).width() > 414) {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form').show();
                    $('#close').show('fade');
                    $('#valid').show();
                    $('#leopouce').show();
                    $('#submit').hide();
                } else {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form-m').show();
                    $('#close').show('fade');
                    $('#valid-m').show();
                    $('#submit-m').hide();
                }
            </script>
            <?php

        } else if ($_GET['valid'] == 0) {
            ?>
            <script>
                if ($(window).width() > 414) {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form').show();
                    $('#close').show('fade');
                    //$('#empty-m').hide();
                } else {
                    $('#overlay, #overlay-back').fadeIn(100);
                    $('#form-m').show();
                    $('#close').show('fade');
                    $('#empty-m').show();
                }
            </script>
            <?php
        } else {

        }
    }
}

/*
if ( isset($_GET['valid']) && ($_GET['valid'] == 1)) {
    ?>
    <script>
        $('#valid').show();
    </script>
<?php
} else{ ?>
    <script>
        $('#valid').hide();
    </script>
    <?php
};

if ( isset($_GET['valid']) && ($_GET['valid'] == 2)) {
    ?>
    <script>
        $('#noValid').show();
    </script>
<?php
} else{ ?>
    <script>
        $('#noValid').hide();
    </script>
    <?php
};
*/