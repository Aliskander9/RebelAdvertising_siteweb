<?php
session_start();
$service=Null;
$quantite=Null;
$message= $_POST['message'];
$email= $_SESSION['email'];


foreach ($_POST['service'] as $valeur) {
    $service = $service . " , " . $valeur;
}


foreach ($_POST['quantite'] as $valeur) {
    $quantite = $quantite . " , " . $valeur;
}



// Connection to DBase
$bdd = new PDO('mysql:host=localhost;dbname=rebeladvertising;charset=utf8', 'root', '');



$req = $bdd->prepare('INSERT INTO commandes  ( service,quantite,message,email) VALUES (:service,:quantite,:message,:email)');
$req->execute(array(
    ':service'=>$service,
    ':quantite'=>$quantite,
    ':message'=>$message,
    ':email'=>$email));




echo 'Commande Enregistré' . '<br>';
include('../views/commandes.html')



?>

