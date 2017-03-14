<?php
include ('config/config.php');

if ( isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['confirmation']) && isset($_POST['telephone'])) {

    if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['confirmation']) ){

        $name=$_POST['name'];
        $firstname=$_POST['firstname'];
        $email=$_POST['email'];
        $confirmation=$_POST['confirmation'];
        $telephone=$_POST['telephone'];

        $sqlEmails='SELECT id FROM users WHERE email = :email';

        $reqCheckEmails = $db->prepare($sqlEmails);
        $reqCheckEmails->execute(
            array(
                'email'=> $email
            )
        );

        $result = $reqCheckEmails->fetch();


        if ($email == $confirmation && !$result){

            $sql='INSERT INTO users(name, firstname, email, confirmation, telephone) VALUES (:name, :firstname, :email, :confirmation, :telephone)';

            $req = $db->prepare($sql);
            $req->execute(
                array(
                    'name'=> $name,
                    'firstname'=> $firstname,
                    'email'=> $email,
                    'confirmation'=> $confirmation,
                    'telephone'=> $telephone
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
        header('Location: test.php');
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
    </head>

    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <img alt="alex" src="img/Leosmile.png" height="38" width="38">
        </div>
        <p class="navbar-text">Bonjour, je suis <strong>Leo</strong> votre nouvel assistant commercial, <strong>et si on travaillait ensemble ?</strong></p>
        <div class="navbar-right">
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

    <div class="header">
        <div class="slogan" align="center">
            <h1>Trouvez de nouveaux clients grâce à Leo</h1>
            <p>Découvrez Leo, l'assistant virtuel de prospection commerciale sur Linkedin</p>
            <button id="try2" class="btn btn-lg">Bénéficiez d'un essai gratuit de 30 jours</button>
        </div>
    </div>

    <div class="leo">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
                <div class="prospection" align="center">
                    <h1>Pourquoi confier vos actions de prospection à <p id="leo">Leo</p> ?</h1>
                    <div class="description">
                        <p>Autonome, Leo décuple vos opportunités commerciales en démarchant pour vous les prospects que vous ciblez sur Linkedin. <strong>En travaillant avec Leo, vous gagnerez ainsi du temps, et vous trouverez de nouveaux clients.</strong></p>
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
                    <p>Parce que vos prospects font partie des <strong>450 millions</strong> d'utilisateurs.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="time">
                    <div class="hourglass">
                        <img src="img/wait.png" width="40" height="40">
                    </div>
                    <p>Parce que vos prospects y passent en moyenne plus de <strong>3 heures</strong>/semaine.</p>
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
                    <p>
                        <strong>Consulter des profils</strong>
                    </p>
                </div>
                <div class="text" align="right">
                    <p>Pour vous faire connaître de vos cibles.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="title" align="right">
                    <img src="img/reseau.png" height="50" width="50">
                    <p>
                        <strong>Entrer en relation</strong>
                    </p>
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
                    <p>
                        <strong>Envoyer des messages</strong>
                    </p>
                </div>
                <div class="text" align="right">
                    <p>À plusieurs destinaires simultanément.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="title" align="right">
                    <img src="img/courrier.png" height="50" width="50">
                    <p>
                        <strong>Extraire des coordonnées</strong>
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
                <h1>Leo démarche à votre place sur Linkedin jusqu'à <strong>1000 prospects/mois !</strong></h1>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="one"> <p><strong>1</strong></p> </div>

                <div class="border"></div>

                <div class="two"> <p><strong>2</strong></p> </div>

                <div class="border"></div>

                <div class="three"> <p><strong>3</strong></p> </div>

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
    </div>

    <div class="pricing" align="center">
        <h1>Un pricing simple et transparent </h1>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-offset-1 col-lg-5">
                <div class="junior">
                    <div class="list">
                        <h2><strong>Leo Junior</strong></h2>
                        <h5><strong>Il démarche pour vous jusqu'à</strong></h5>
                        <h3 id="cinq"><strong>500 clients</strong></h3>
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
                <button class="juniorprice">
                    <p><strong> 59€ /mois </strong></p>
                    <div class="engagement">
                        <p>Sans engagement</p>
                    </div>
                </button>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="expert">
                    <div class="list">
                        <h2><strong>Leo Expert</strong></h2>
                        <h5><strong>Il démarche pour vous jusqu'à</strong></h5>
                        <h3 id="mille"><strong>1000 clients</strong></h3>
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
                <button class="expertprice">
                    <p> <strong>99€ /mois</strong></p>
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

    <div class="footer">
        <div class="row">
            <div class="col-sm-10 col-md-10 col-lg-10">
                <p>Leo est un assistant virtuel commercial développé par la société Linkeleads</p>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <p>contact :</p>
                <a href="#"><img src="img/gmail.png" height="30" width="30"></a>
                <a href="#"><img src="img/linkedin.png" height="30" width="30"></a>
            </div>
        </div>
    </div>

    <div class="overlay">
        <div id="form">
            <h3 align="center">Inscrivez vous ici, et bénéficiez d'un essai gratuit pendant 30 jours !</h3>
            <button type="button" value="Close" id="close" style="float: right">Close</button>
            <form action="index.php" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="usr">Nom</label>
                            <input class="form-control input-lg" name="name" type="text" id="userName" required>
                            <p id="error1" style="color: red; display: none">Veuillez renseigner ce champs</p>
                        </div>
                        <div class="col-xs-6">
                            <label for="usr">Prénom</label>
                            <input class="form-control input-lg" name="firstname" type="text" id="userFirstname" required>
                            <p id="error2" style="color: red;display: none">Veuillez renseigner ce champs</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="usr">Adresse e-mail</label>
                            <input class="form-control input-lg" name="email" type="email" id="userEmail" required>
                            <p id="error3" style="color: red;display: none">Veuillez renseigner ce champs correctement</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="usr">Confirmez votre adresse e-mail</label>
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

                <div id="valid" style="display: none; color: green;">Insciption validée!</div>
                <div id="noValid" style="display: none; color: red;">Attention cet email existe deja ou ne correspond pas</div>

                <div class="row">
                    <div class="col-xs-12">
                        <input class="btn btn-default" type="submit" value="Envoyer !" id="submit">
                    </div>
                </div>
                <!--<button name="submitForm" type="submit" value="Envoyer" id="submit">Envoyer</button>-->
                <!--<button name="submitForm" type="button" value="Envoyer" id="button" style="display: none">Envoyer</button>-->
            </form>
        </div>

        <div id="overlay-back"></div>
        <div id="overlay"></div>

        <script>

            $('#try').on('click', function () {
                $('#overlay, #overlay-back').fadeIn(1000);
                $('#form').show();
            });

            $('#close').on('click', function () {
                $('#overlay, #overlay-back').fadeOut(600);
                $('#form').hide();
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

        <!--FADE STYLE :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
        <!-- Modal -->
        <!--
        <form action="index.php" method="post">
            <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Inscription</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="usr">Nom</label>
                                <input type="text" name="name" class="form-control" id="nameUsr" required>
                                <div id="error1" style="color:red;display:none">ce champs n'est pas correctement rempli</div>
                                <label for="usr">Prénom</label>
                                <input type="text" name="firstname" class="form-control" id="firstnameUsr" required>
                                <div class="error" style="color:red;display:none">ce champs n'est pas correctement rempli</div>
                                <label for="usr">Adresse e-mail</label>
                                <input type="email" name="email" class="form-control" id="emailUsr" required>
                                <div class="error" style="color:red;display:none">ce champs n'est pas correctement rempli</div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" value="Envoyer" class="btn btn-default">Envoyer</button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
        <!--</div><!-- /.modal-dialog -->
        <!--</div><!-- /.modal -->
        <!--</form>-->

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    </body>
    </html>

<?php if ( isset($_GET['valid']) ){

    $_GET['valid'] = (int) $_GET['valid'];

    if ($_GET['valid'] >= 1 AND $_GET['valid'] <= 2){

        if ($_GET['valid'] == 2){
            ?>
            <script>
                $('#overlay, #overlay-back').fadeIn(0);
                $('#form').show();
                $('#noValid').show();
            </script>
            <?php

        } else if ($_GET['valid'] == 1){
            ?>
            <script>
                $('#overlay, #overlay-back').fadeIn(0);
                $('#form').show();
                $('#valid').show();
            </script>
            <?php

        } else{
            echo 'attention je ne sais pas pq';
        }

    } else{
        //echo 'hey';
        //header('Location: test.php');
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