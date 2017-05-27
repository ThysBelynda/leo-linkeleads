<?php

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

                $sql = 'INSERT INTO prelaunching(name, firstname, email, telephone, date_inscription) VALUES (:name, :firstname, :email, :telephone, NOW())';

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

                //mail($destinataire, $sujet, $message, $entete);

                //header('Location: index.php?valid=1');

                //mail($destinataire, $sujet, $message, $entete);

                header('Location: http://linkeleads.com/mailpre.php?email='.urlencode($email).'');

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