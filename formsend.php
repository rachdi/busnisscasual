<?php 
require('class.phpmailer.php'); 
 $name     = $_POST['name']; // $_POST( convertit des caractères "spéciaux" en équivalent HTML
 $email  = $_POST['email'];
 $message = $_POST['message'];
 $phone = $_POST['phone'];
 
 $destinataire = 'bigking3100@gmail.com';

 $contenu = '<html><head><title>Titre du message</title></head><body>';
 $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
 $contenu .= "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone ;
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)



  $mail = new PHPMailer();
//   $mail->Host = 'ftp://bassemrach.esy.es/';
//   $mail->SMTPAuth   = false;
// $mail->Port = 21; // Par défaut

// Expéditeur
  $mail->SetFrom($email);
// Destinataire
  $mail->AddAddress($destinataire);
// Objet
  $mail->Subject = 'Objet du message';

// Votre message
  $mail->MsgHTML($contenu);

// Envoi du mail avec gestion des erreurs
  if(!$mail->Send()) {
  	
  	echo "

  	<div class='formdev'>
  		<div class='global'>
  			<h2>Votre message est bien envoyer retournez a la page dacceil !</h2><hr/>

  			


  		</div>


  	</div>


  	";
  } else {
  	echo "

  	<div class='formdev'>
  		<div class='global'>
  			<h2>Votre message est bien envoyer retournez a la page dacceil !</h2><hr/>

  			


  		</div>


  	</div>


  	";
  } 

  ?>
