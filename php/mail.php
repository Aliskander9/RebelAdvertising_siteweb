<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

ini_set( 'display_errors', 1 );

error_reporting( E_ALL );

$from = "skander.latrach97@gmail.com";

$to = "skander.latrach97@gmail.com";

$subject = $_POST['objet'];

$message = $_POST['message'];

$headers = "From:" . $from;

if(mail($to,$subject,$message, $headers)){
        echo "L'email a été envoyé.";

}

else{echo "l'email n'est pas envoyé";
}


?>
<body>
</body>
</html>
