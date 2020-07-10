<?php


$email= $_POST['email'];






// Connection to DBase
$bdd = new PDO('mysql:host=localhost;dbname=rebeladvertising;charset=utf8', 'root', '');



$req = $bdd->prepare('INSERT INTO newsletters ( email,date) VALUES (:email,:date)');
$req->execute(array(
    ':email'=>$email,
    ':date'=>date('Y-m-d')));
echo "vous êtes inscrit";

header('Location:../views/index2.php');





?>

