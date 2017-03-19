<?php
include ('config/config.php');

if ( isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['confirmation']) && isset($_POST['telephone'])) {

    if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['confirmation'])) {

        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $confirmation = $_POST['confirmation'];
        $telephone = $_POST['telephone'];

        $sqlEmails = 'SELECT id FROM users WHERE email = :email';

        $reqCheckEmails = $db->prepare($sqlEmails);
        $reqCheckEmails->execute(
            array(
                'email' => $email
            )
        );

        $result = $reqCheckEmails->fetch();


        if ($email == $confirmation) {
            if (!$result) {

                $sql = 'INSERT INTO users(name, firstname, email, confirmation, telephone) VALUES (:name, :firstname, :email, :confirmation, :telephone)';

                $req = $db->prepare($sql);
                $req->execute(
                    array(
                        'name' => $name,
                        'firstname' => $firstname,
                        'email' => $email,
                        'confirmation' => $confirmation,
                        'telephone' => $telephone
                    )
                );

                $destinataire = $_POST['email'] . ', ';
                $destinataire .= 'leo@linkeleads.com';

                $sujet = 'Linkeleads - Confirmation PreLaunching';
                $entete = 'From: team@linkeleads.com';
                $message = 'Bienvenue sur Linkeleads,
            Veuillez cliquer sur le lien ci dessous ou copier/coller dans votre navigateur internet.
            ------------
            Ceci est un mail automatique. Merci de ne pas y répondre.';

                mail($destinataire, $sujet, $message, $entete);

                header('Location: index.php?valid=1');

            } else {
                header('Location: index.php?valid=2');
            }
        } else {
            header('Location: index.php?valid=3');
        }
    }
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
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
        </div>
        <div class="navbar-text" id="text-machine">
            Bonjour, je suis <p id="nav-leo">Leo</p> votre nouvel assistant commercial, <p id="nav-question">et si on travaillait ensemble ?</p>
        </div>

        <!--<p class="navbar-text" id="text-mobile">
            <img alt="alex" src="img/Leosmile.png" height="30" width="30">
            <strong>Et si on travaillait ensemble ?</strong>
            <button class="btn navbar-btn" id="try" type="button"><strong>Essayez gratuitement</strong></i></button>
        </p>-->

        <div class="navbar-right" id="right-machine">
            <button class="btn navbar-btn" id="try" type="button"><strong>Essayez gratuitement</strong></i></button>
        </div>
    </nav>

    <!--
    <div class="navbar">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="navbar-header">
                        <a class="icon" href="#">
                            <img alt="alex" src="img/Leoface.png" height="40" width="40">
                        </a>
                    </div>

                    <p class="navbar-text">Bonjour, je suis <strong>Leo</strong> votre nouvel assistant commercial à base d'intelligence artificielle. <strong>Et si on travaillait ensemble ?</strong></p>

                    <div class="navbar-right">
                        <button id="try" type="button" class="btn navbar-btn"><strong>Essayez gratuitement</strong></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    -->

    <header class="header">
        <div class="message" align="center">
            <h1>Trouvez de nouveaux clients grâce à Leo</h1>
            <p>Découvrez Leo, l'assistant virtuel de prospection commerciale sur Linkedin</p>
            <button id="try2" class="btn btn-lg">Bénéficiez d'un essai gratuit de 30 jours</button>
        </div>
    </header>

    <div class="leo">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
                <div class="prospection" align="center">
                    <h1>Pourquoi confier vos actions de prospection à <p id="leo">Leo</p> ?</h1>
                    <div class="description">
                        Autonome, Leo décuple vos opportunités commerciales en démarchant pour vous les prospects que vous ciblez sur Linkedin.
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
                    <p>Parce que vos prospects font partie des <strong>450 millions</strong>d'utilisateurs.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="time">
                    <div class="hourglass">
                        <img src="img/wait.png" width="40" height="40">
                    </div>
                    <p>Parce que vos prospects y passent en moyenne plus de <strong>3 heures</strong> /semaine.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="messages">
                    <div class="mail">
                        <img src="img/mail.png" width="40" height="40">
                    </div>
                    <p>Parce que <strong>93%</strong> des messages que vous enverrez à vos prospects seront lus.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="missions" align="center">
        <h1>Quelles sont les <p id="mi">missions</p> que Leo peut réaliser pour vous ?</h1>
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
                    <p>À plusieurs destinaires simultanément.</p>
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
                <h1>Leo démarche à votre place jusqu'à <p id="perf">1000 prospects/mois</p> sur Linkedin !</h1>
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
                <div class="stapes">
                    <p>Indiquez à Leo les prospects que vous ciblez sur Linkedin</p>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="stapes">
                    <p>Indiquez à Leo les missions qu'il doit effectuer pour vous</p>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
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
            <div class="col-sm-6 col-md-6 col-lg-offset-1 col-lg-5">
                <div class="junior">
                    <div class="list">
                        <h2>Leo Junior</h2>
                        <h5>Il démarche pour vous jusqu'à</h5>
                        <h3 id="cinq">500 clients</h3>
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
                <button id="j-price" class="juniorprice">
                    <p> 59€ /mois</p>
                    <div class="engagement">
                        <p>Sans engagement</p>
                    </div>
                </button>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="expert">
                    <div class="list">
                        <h2>Leo Expert</h2>
                        <h5>Il démarche pour vous jusqu'à</h5>
                        <h3 id="mille">1000 clients</h3>
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
                <button id="e-price" class="expertprice">
                    <p>99€ /mois</p>
                    <div class="engagement">
                        <p>Sans engagement</p>
                    </div>
                </button>
            </div>

        </div>

        <div class="gratis">
            <button id="try3" class="btn btn-lg">Bénéficiez d'un essai gratuit de 30 jours</button>
            <br><br>
            <h2>Décidez ensuite.</h2>
        </div>

        <!--<button id="try3" class="btn btn-lg"><strong>Essayez gratuitement</strong></button>-->

    </div>

    <div id="last" align="center">
        <div class="portrait">
            <img src="img/Leosmile.png" height="145" width="145">
            <h1>Engagez-moi, c’est sans engagement.</h1>
        </div>
        <div class="button-test">
            <button id="try4" type="button" class="btn btn-lg">Bénéficiez d'un essai gratuit de 30 jours</button>
            <p>À l'issue de cette période d'essai, vous déciderez de le garder ou non</p>
        </div>
    </div>

    <div class="footer" align="center">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <p>Leo est un assistant virtuel commercial développé par la société Linkeleads</p>
                <a href="#"><img src="img/gmail.png" height="30" width="30"></a>
                <a href="#"><img src="img/linkedin.png" height="30" width="30"></a>
            </div>
            <!--<div class="col-sm-2 col-md-2 col-lg-2">
                <p>contact :</p>
                <a href="#"><img src="img/gmail.png" height="30" width="30"></a>
                <a href="#"><img src="img/linkedin.png" height="30" width="30"></a>
            </div>-->
        </div>
    </div>

    <!--<button type="button" value="Close" id="close" style="float: right">x</button>-->

    <div class="overlay">
        <div id="form">
            <button type="button" value="Close" id="close">x</button>
            <h3 align="center">Inscrivez-vous ici, et bénéficiez d'un essai gratuit pendant 30 jours</h3>
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
                        <div class="col-xs-6">
                            <label for="usr">Téléphone</label>
                            <input class="form-control input-lg" name="telephone" type="tel" id="userTelephone">
                            <p id="error4" style="color: red;display: none">Veuillez renseigner ce champs correctement</p>
                        </div>
                    </div>
                </div>

                <!--<div id="existing" style="margin-left:30px; display: none; color: red;">L'e-mail que vous avez rentré existe déjà.</div>-->
                <!--<div id="wrong" style="margin-left:30px; display: none; color: red;">Les deux adresses mails rentrées ne correspondent pas</div>-->

                <div class="row">
                    <div class="col-xs-12">
                        <input class="btn btn-default" type="submit" value="Envoyer" id="submit">
                        <div id="valid">Votre inscription est validée. Merci, à bientôt !</div>
                        <div id="existing">L'adresse mail renseignée existe déjà</div>
                        <div id="wrong">Reconfirmez votre adresse mail</div>
                    </div>
                </div>
                <!--<button name="submitForm" type="submit" value="Envoyer" id="submit">Envoyer</button>-->
                <!--<button name="submitForm" type="button" value="Envoyer" id="button" style="display: none">Envoyer</button>-->
            </form>
        </div>

        <div id="overlay-back"></div>
        <div id="overlay"></div>

        <script>

            $('#close').on('click', function () {
                $('#overlay, #overlay-back').fadeOut(600);
                $('#form').hide();
                $('#close').hide();
            });

            $('#try').on('click', function () {
                $('#overlay, #overlay-back').fadeIn(600);
                $('#form').show('fade');
                $('#close').show('fade');
            });

            $('#try1').on('click', function () {
                $('#overlay, #overlay-back').fadeIn(600);
                $('#form').show('fade');
                $('#close').show('fade');
            });

            $('#try2').on('click', function () {
                $('#overlay, #overlay-back').fadeIn(600);
                $('#form').show('fade');
                $('#close').show('fade');
            });

            $('#try3').on('click', function () {
                $('#overlay, #overlay-back').fadeIn(600);
                $('#form').show('fade');
                $('#close').show('fade');
            });

            $('#e-price').on('click', function () {
                $('#overlay, #overlay-back').fadeIn(600);
                $('#form').show('fade');
                $('#close').show('fade');
            });

            $('#j-price').on('click', function () {
                $('#overlay, #overlay-back').fadeIn(600);
                $('#form').show('fade');
                $('#close').show('fade');
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

<?php if ( isset($_GET['valid']) ){

    $_GET['valid'] = (int) $_GET['valid'];

    if ($_GET['valid'] >= 1 AND $_GET['valid'] <= 3) {

        if ($_GET['valid'] == 3) {
            ?>
            <script>
                $('#overlay, #overlay-back').fadeIn(100);
                $('#form').show();
                $('#close').show('fade');
                $('#wrong').show();
                /*
                 $('.has-error').show();
                 $('#fg-email').hide();
                 $('#fg-conf').hide();
                 */
            </script>
            <?php

        } else if ($_GET['valid'] == 2) {
            ?>
            <script>
                $('#overlay, #overlay-back').fadeIn(100);
                $('#form').show();
                $('#close').show('fade');
                $('#existing').show();
            </script>
            <?php

        } else if ($_GET['valid'] == 1) {
            ?>
            <script>
                $('#overlay, #overlay-back').fadeIn(100);
                $('#form').show();
                $('#close').show('fade');
                $('#valid').show();
            </script>
            <?php

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