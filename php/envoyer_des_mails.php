<?php
require "répertoire_phpmailer/class.phpmailer.php";
$mail = new PHPmailer();
//ici ce qui t'interesse
$mail->IsSMTP();
$mail->Host = "smtp.gnet.tn";
$mail->SMTPAuth = true;
$mail->Username = 'skander.latrach97@gmail.com';
$mail->Password = 'rsseia1997';
//fin
$mail->From='supportskander@gmail.com';
$mail->AddAddress('skander.latrach97@gmail.com');
$mail->AddReplyTo('skander.latrach97@gmail.com');
$mail->Subject='Exemple trouvé sur DVP';
$mail->Body='Voici un exemple d\'e-mail au format Texte';
if(!$mail->Send()){ //Teste le return code de la fonction
    echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
}
else{
    echo 'Mail envoyé avec succès';
}
$mail->SmtpClose();
unset($mail);
?>