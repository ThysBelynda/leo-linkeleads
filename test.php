<?php
$host="localhost";
$dbName="leo";
$user="root";
$password="root";

try{
    $db = new PDO('mysql:host=localhost;dbname=leo;charset=utf8', 'root', 'root');
} catch (Exception $e){
    die('Erreur :'.$e->getMessage());
}




include('config/config.php');

$cle = md5(microtime(TRUE)*100000);

if (isset($_POST['firstname']) && (!empty($_POST['firstname']))
    && (isset($_POST['name']) && (!empty($_POST['name'])) )
    && (isset($_POST['email']) && (!empty($_POST['email']))) ){

    $name = htmlspecialchars($_POST['name']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);

    /*
    $reqUniqueEmail= $db->prepare('SELECT id FROM users WHERE email = :email');
    $reqUniqueEmail->execute(
        array(
            'email' => $email
        )
    );

    $result = $reqUniqueEmail->fetch();

    if(!$result){*/
    $sql='INSERT INTO users(name, firstname, email, cle) VALUES (:name, :firstname, :email, :cle)';

    $req = $db->prepare($sql);
    $req->execute(
        array(
            'name' => $name,
            'firstname' => $firstname,
            'email' => $email,
            'cle' => $cle
        ));

    /*
    $destinataire = $_POST['email'];
    $sujet = 'Linkeleads - Confirmation PreLaunching';
    $entete = 'From: team@linkeleads.com';
    $message = 'Bienvenue sur Linkeleads,
    Pour activer votre compte, veuillez cliquer sur le lien ci dessous ou copier/coller dans votre navigateur internet.
    http://linkeleads.com/validation.php?log='.urlencode($_POST['email']).'&cle='.urlencode($cle).'
    ------------
    Ceci est un mail automatique. Merci de ne pas y répondre.';
    mail($destinataire, $sujet, $message, $entete);


    echo 'données enregistrées et mail envoyé';

} else{
    echo 'e-mail déjà enregistré';
}*/
}
?>
