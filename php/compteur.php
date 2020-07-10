<?php
// Ouverture ou récupération de la session
session_start();
$fp = fopen("compteur.txt","r+");
$nbvisites = fgets($fp,11);
// Incrémentation du compteur si la
// variable (de session) 'ouverture' n'existe pas
if (empty($_SESSION['ouverture'])) $nbvisites++;
// Sinon création de cette variable
else $_SESSION['ouverture']='oui';
fseek($fp,0);
fputs($fp,$nbvisites);
fclose($fp);
// Écriture du nombre de visites
print("$nbvisites visiteurs");?>
