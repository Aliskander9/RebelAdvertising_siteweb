<?php
session_start();
$mysqli = mysqli_connect("localhost", "root", "", "rebeladvertising");
$service=NULL;
$quantite=NULL;
$message=$_POST['message'];
$id=$_SESSION['email'];

$message = htmlentities($_POST['message'], ENT_QUOTES, "ISO-8859-1");
if(!$mysqli){
    echo "Une erreur s'est produite !";
}
else {


    foreach ($_POST['service'] as $valeur) {
        $service = $service . " , " . $valeur;
    }
    echo $service;

    foreach ($_POST['quantite'] as $valeur) {
        $quantite = $quantite . " , " . $valeur;
    }
    echo $quantite;


    echo $message;
    echo $id;




    $Requete = mysqli_query($mysqli,"INSERT INTO commandes (service,quantite,description) VALUES ('$service','$quantite','$message')");
    if(!$Requete){

        echo "commande non enregistré une erreur s'est produite ";
    }
    else{

        echo 'Commande enregistré';
        include('../views/commandes.html');
    }

}

?>