<html>
<head>
<title>Envoi en cours...</title>

</head>
<body>
<?php 
ini_set('SMTP', 'localhost');
ini_set('smtp_port', 25);
$name=$_POST['name']; 
$email=$_POST['email']; 
$subject=$_POST['subject']; 
$text = $_POST['text'];

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$destinataire="potier.erwan56@hotmail.fr"; 
if (mail($destinataire,$objet,$message,$headers)) { 
header('Location: https://....'); 
} else { 
echo "Une erreur s'est produite"; 
} 
?></p>
<p align="center"><h3 class="msg">Vous allez bientot etre redirigé vers la page d'acceuille<br>
Si vous n'êtes pas redirigé au bout de 5 secondes, cliquez <a href="https://....">ici 
</a></h3></p>
</body>
</html>
