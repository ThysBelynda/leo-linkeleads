<?php
include ('config/config.php');

if ( isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) ) {

    if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) ){

        $name=$_POST['name'];
        $firstname=$_POST['firstname'];
        $email=$_POST['email'];

        $sqlEmails='SELECT id FROM users WHERE email = :email';

        $reqCheckEmails = $db->prepare($sqlEmails);
        $reqCheckEmails->execute(
            array(
                'email'=> $email
            )
        );

        $result = $reqCheckEmails->fetch();

        if (!$result){

            $sql='INSERT INTO users(name, firstname, email) VALUES (:name, :firstname, :email)';

            $req = $db->prepare($sql);
            $req->execute(
                array(
                    'name'=> $name,
                    'firstname'=> $firstname,
                    'email'=> $email
                )
            );

            $destinataire = $_POST['email'];
            $sujet = 'Linkeleads - Confirmation PreLaunching';
            $entete = 'From: team@linkeleads.com';
            $message = 'Bienvenue sur Linkeleads,
        Veuillez cliquer sur le lien ci dessous ou copier/coller dans votre navigateur internet.
        ------------
        Ceci est un mail automatique. Merci de ne pas y répondre.';

            mail($destinataire, $sujet, $message, $entete);

            header('Location: index.php?valid=1');

        } else {
            header('Location: index.php?valid=0');
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

<div class="navbar">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="navbar-header">
                    <a class="icon" href="#">
                        <img alt="alex" src="img/Leoface.png" height="80%" width="80%">
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

<div class="header" data-stellar-ratio="10">

    <div class="slogan" align="center">
        <h1>Trouvez de nouveaux clients grâce à Leo</h1>
        <p>Découvrez Léo, l'assistant virtuel de prospection commerciale</p>
        <button id="try2" class="btn btn-lg">Bénéficiez d'un essai gratuit de 30 jours</button>
    </div>
</div>

<div class="leo">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <div class="prospection" align="center">
                <h1>Pourquoi confier vos actions de prospection à <strong>Leo</strong> ?</h1>
                <div class="description">
                    <p>Autonome, Leo décuple vos opportunités commerciales en démarchant à votre place les prospects que vous ciblez sur Linkedin. <strong>En travaillant avec Leo, vous gagnerez ainsi du temps, et vous trouverez de nouveaux clients.</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="linkedin" align="center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <div class="levier" align="center">
                <h1>Pourquoi faire de <strong>Linkedin</strong> un levier commercial ?</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="users">
                    <div class="profils">
                        <img src="img/user-7.png" width="40px" height="40px">
                    </div>
                    <p>Parce que vos prospects font partie des <strong>450 millions</strong> d'utilisateurs.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="time">
                    <div class="hourglass">
                        <img src="img/wait.png" width="40px" height="40px">
                    </div>
                    <p>Parce que vos prospects y passent en moyenne plus de <strong>3 heures</strong> pas semaine.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="messenger">
                    <div class="mail">
                        <img src="img/mail.png" width="40px" height="40px">
                    </div>
                    <p>Parce que <strong>93%</strong> des messages que vous adressez à vos prospects seront lus.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="missions" align="center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h1>Quelles sont les <strong>missions</strong> que Leo peut réaliser pour vous ?</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
            <h3><strong>Consulter des profils</strong></h3>
            <div class="cards">
                <p class="pour">Pour vous faire connaître de vos cibles.</p>
                <img src="img/loupe.png" height="100px" width="100px">
            </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
            <h3><strong>Entrer en relation</strong></h3>
            <div class="cards">
                <p class="pour">Pour élargir votre réseau professionnel.</p>
                <img src="img/reseau.png" height="100px" width="100px">
            </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="titles">
                <h3><strong>Engager des conversations</strong></h3>
            </div>
            <div class="cards">
                <p class="pour">Pour présenter et vendre vos offres à vos cibles.</p>
                <img src="img/chat.png" height="100px" width="100px">
            </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="titles">
                <h3><strong>Extraire des coordonnées</strong></h3>
            </div>
            <div class="cards">
                <p class="pour">Pour mener des campagnes d'e-mailing ciblées.</p>
                <img src="img/courrier.png" height="100px" width="100px">
            </div>
        </div>

    </div>
</div>

<div class="comment" align="center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h1><strong>Comment</strong> travailler avec Leo ?</h1>

            <div class="one"> <p>1</p> </div>

            <div class="border"></div>

            <div class="two"> <p>2</p> </div>

            <div class="border"></div>

            <div class="three"> <p>3</p> </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="stapes">
                    <p id="one"><strong>Indiquez à Leo les prospects que vous ciblez depuis votre profil Linkedin</strong></p>
                </div>

            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="stapes">
                    <p id="two"><strong>Indiquez à Leo les missions qu'il foit effectuer pour vous</strong></p>
                </div>

            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="stapes">
                    <p id="three"><strong>Laissez travailler Leo, il vous previent lorsqu'il termine</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="analyse">
        <p>Leo démarche à votre place sur Linkedin jusqu'à <strong>1000 prospects/mois !</strong></p>
    </div>
</div>



<div class="pricing" align="center">
    <h1>Une rémunération simple et transparente</h1>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-offset-1 col-lg-5">
            <div class="junior">
                <div class="list">
                    <h2><strong>Leo Junior</strong></h2>
                    <h5><strong>Il démarche pour vous jusqu'à</strong></h5>
                    <h3><strong>500 clients</strong></h3>
                    <br>
                    <p>Reporting <br><br>Visite de profils cibles <br><br>Mise en relation <br><br>Envoi de messages <br><br>Extraction de coordonnées</p>
                </div>
                <div class="valid">
                    <p><i class="fa fa-check-circle" aria-hidden="true"></i>
                        <br><br>
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <br><br>
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <br><br>
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                        <br><br>
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div class="juniorprice">
                <p><strong> 59€ /mois </strong></p>
                <div class="engagement">
                    <p>Sans engagement</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-5">
            <div class="expert">
                <div class="list">
                    <h2><strong>Leo Expert</strong></h2>
                    <h5><strong>Il démarche pour vous jusqu'à</strong></h5>
                    <h3><strong>1000 clients</strong></h3>
                    <br>
                    <p>Reporting <br><br>Visite de profils cibles <br><br>Mise en relation <br><br>Envoi de messages <br><br>Extraction de coordonnées</p>
                </div>
                <div class="valid">
                    <p><i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        <i class="fa fa-check-circle" aria-hidden="true"></i> <br><br>
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div class="proprice">
                <p> <strong>99€ /mois</strong></p>
                <div class="engagement">
                    <p>Sans engagement</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
            <div id="try3" class="btn btn-success btn-block btn-group-lg">
                Bénéficiez d'un essai <strong>gratuit</strong> de 30 jours
            </div>
        </div>
    </div>
</div>


<div id="last" align="center">
    <div class="portrait">
        <img src="img/Leosmile.png" height="125px" width="125px">
        <h1>Engagez-moi, c’est sans engagement.</h1>
    </div>

    <br>

    <div class="button-test">
        <button id="try4" type="button" class="btn btn-info btn-lg">Bénéficiez d'un essai gratuit de 30 jours</button>
        <p>À l'issue de cette période d'essai, vous déciderez de le garder ou non</p>
    </div>

    <br>
    <br>

</div>


<div class="footer">
    <p>Leo est un assistant virtuel commercial développé avec rigueur et professionnalisme par la société Linkeleads</p>
    <div class="asap">
        <p><strong>N'hésitez pas à me contacter, je vous répondrai ASAP :</strong></p>
    </div>
    <div class="contact">
        <div class="lin">
            <a href="#"><img src="img/linkedin.png" height="40px" width="40px"></a>
        </div>

        <div class="gmail">
            <a href="#"><img src="img/gmail.png" height="40px" width="40px"></a>
        </div>
    </div>
</div>

<div id="form">
    <button type="button" value="Close" id="close" style="float: right">Close</button>
    <form action="index.php" method="post">
        <div class="form-group">
            <label>Nom</label>
            <input class="test" name="name" type="text" id="userName" >
            <p id="error1" style="color: red; display: none">Veuillez renseigner ce champs</p>

            <label for="usr">Prénom</label>
            <input class="test" name="firstname" type="text" id="userFirstname" >
            <p id="error2" style="color: red;display: none">Veuillez renseigner ce champs</p>

            <label for="usr">Adresse e-mail</label>
            <input class="test" name="email" type="email" id="userEmail" >
            <p id="error3" style="color: red;display: none">Veuillez renseigner ce champs correctement</p>

            <button name="submitForm" type="submit" value="Envoyer" id="submit">Envoyer</button>
            <!--<button name="submitForm" type="button" value="Envoyer" id="button" style="display: none">Envoyer</button>-->

        </div>
    </form>
</div>

<div id="pop">

</div>

<?php
if ( isset($_GET['valid']) && ($_GET['valid'] == 0)) {
    ?>
    <script>
        $('#form').show();
    </script>
<?php
} else{ ?>
    <script>
        $('#form').hide();
    </script>
    <?php
};

if ( isset($_GET['valid']) && ($_GET['valid'] == 1)) {
    ?>
    <script>
        $('#pop').show();
    </script>
<?php
} else{ ?>
    <script>
        $('#pop').hide();
    </script>
    <?php
}
?>

<script>
    $('#submit').submit(function () {
        $('#pop').show();
    });

    //OUVRIR LA MODAL EN CLIQUANT SUR LE BOUTTON
    $('#try').click(function(){
        $('#form').show();
    });

    $('#close').click(function () {
        $('#form').hide();
    });

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
