<html>
<head>
<title>Envoi en cours...</title>

</head>
<body>
<?php 
ini_set('SMTP', 'localhost');
ini_set('smtp_port', 25);
$nom=$_POST['name']; 
$prenom=$_POST['firstname']; 
$mail=$_POST['email']; 
$objet=$_POST['objet']; 
$message = $_POST['text'];

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$destinataire="contact@even-pays.fr"; 
if (mail($destinataire,$objet,$message,$headers)) { 
header('Location: https://florian-trudelle.fr'); 
} else { 
echo "Une erreur s'est produite"; 
} 
?></p>
<p align="center"><h3 class="msg">Vous allez bientot etre redirigé vers la page d'acceuil<br>
Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href="https://even-pays.fr">ici 
</a></h3></p>
</body>
</html>
