<?php
if (session_status()==PHP_SESSION_ACTIVE){
    echo '<link rel="stylesheet" href="../../../../Users/user/Desktop/halo%20(2)/halo/css/main.css" type="text/css">';
    echo '<div class="preHeader">
 <div class="" linkContainer>
            <a href="../php/deconnexion.php" class="conn"> Déconnexion </a>
            <p class="conn"> Bonjour $_SESSION["email"] </p></div>';

}



    else{
        echo '<link rel="stylesheet" href="../../../../Users/user/Desktop/halo%20(2)/halo/css/main.css" type="text/css">';
        echo '<div class="preHeader">';
        echo '<div class="" linkContainer>';
        echo '<a href="../views/connexion.html" class="conn">Se connnnecter </a></div>';
    }
?>