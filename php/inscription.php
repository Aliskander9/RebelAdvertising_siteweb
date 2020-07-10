<?php
$user = "root";
$password = "";
$host = "localhost";
$dbase = "rebeladvertising";
$table = "users";


$username=$_POST['username'];
$lastname=$_POST['lastname'];
$societe=$_POST['societe'];
$fonction=$_POST['fonction'];
$adresse=$_POST['adresse'];
$tel=$_POST['tel'];
if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{$email= $_POST['email'];}
else{
    echo "Email n'est pas valide !";
}
$mdp=$_POST['mdp'];


// Connection to DBase
$dbc= mysqli_connect($host,$user,$password, $dbase)
or die("Unable to select database");


$query= "INSERT INTO $table(nom,prenom,societe,fonction,adresse,tel,email,mdp) VALUES ('$username','$lastname','$societe','$fonction','$adresse','$tel','$email','$mdp')";

mysqli_query ($dbc, $query)
or die ("Error querying database");

echo 'You have been successfully added.' . '<br>';

mysqli_close($dbc);
header("location: ../views/index2.php" ) ;

?>
