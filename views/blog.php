<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rebel Advertising</title>
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">

<body>


<header>
    <?php
    if (!empty( $_SESSION['email']))
    {
        echo '<div class="preHeader">
    <div class="" linkContainer>
        <a href="../php/deconnexion.php" class="conn"> Déconnexion </a>
        <p class="conn">';echo 'Bonjour  '.$_SESSION["email"]; echo '</p></div></div>';

    }



    else{
        echo '<div class="preHeader">';
        echo '<div class="" linkContainer>';
        echo '<a href="connexion.html" class="conn">Se connecter </a></div></div>';
    }
    ?>


    <div class="header">



        <img src="../img/logo.png" alt="logo" class="logo">
        <nav class="menu">
            <a href="index.php" class="link ">Acceuil</a>
            <a href="services.php" class="link">Services</a>
            <a href="references.php" class="link">Références</a>
            <a href="equipe.php" class="link">L'équipe</a>
            <a href="blog.php" class="link Active">Blog</a>
            <a href="contact.php" class="link ">Contact</a>
        </nav>
    </div>
    <div  class="banner"></div>
</header>
<div class="vision1"><br>

    <div class="fb" style="float: right";><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRebelAdvertisingTn%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="2" allowTransparency="true" allow="encrypted-media"></iframe></div>

    <ul id="rig">
        <li>
            <a class="rig-cell" href="#">
                <img class="rig-img" src="../img/banner2.jpg">
                <span class="rig-overlay"></span>
                <span class="rig-text">Article 1</span>
            </a>
        </li>
        <li>
            <a class="rig-cell" href="#">
                <img class="rig-img" src="../img/banner2.jpg">
                <span class="rig-overlay"></span>
                <span class="rig-text">Consectetur Adipiscing</span>
            </a>
        </li>
        <li>
            <a class="rig-cell" href="#">
                <img class="rig-img" src="../img/banner2.jpg">
                <span class="rig-overlay"></span>
                <span class="rig-text">Vivamus ut Felis</span>
            </a>
        </li>
        <li>
            <a class="rig-cell" href="#">
                <img class="rig-img" src="../img/banner2.jpg">
                <span class="rig-overlay"></span>
                <span class="rig-text">Curabitur tempus</span>
            </a>
        </li>
        <li>
            <a class="rig-cell" href="#">
                <img class="rig-img" src="../img/banner2.jpg">
                <span class="rig-overlay"></span>
                <span class="rig-text">Sed et nunc luctus</span>
            </a>
        </li>
        <li>
            <a class="rig-cell" href="#">
                <img class="rig-img" src="../img/banner2.jpg">
                <span class="rig-overlay"></span>
                <span class="rig-text">Suspendisse tellus</span>
            </a>
        </li>
        <li>
            <a class="rig-cell" href="#">
                <img class="rig-img" src="../img/banner2.jpg">
                <span class="rig-overlay"></span>
                <span class="rig-text">pellentesque odio</span>
            </a>
        </li>
        <li>
            <a class="rig-cell" href="#">
                <img class="rig-img" src="../img/banner2.jpg">
                <span class="rig-overlay"></span>
                <span class="rig-text">Nam euismod</span>
            </a>
        </li>

    </ul>

<?php
if (!empty( $_SESSION['email']))
{
      echo'<div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
      <div class="fb-comments" data-href="https://www.facebook.com/RebelAdvertisingTn/" data-numposts="50"></div>
      <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FRebelAdvertisingTn%2F&width=122&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId" width="122" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>';
          }
          else{};
?>
<br>





</div>
</div>
</div>
<footer>
    <div class="prefooter">
        <h3 class="h3">    A propos </h3>
        <p class="add"> <font color="white"> Adresse : Résidence Narjess Bloc C3 2éme étage Appt C321 Les jardins d'El Aouina Tunis</font></p>
        <p class="ph"><font color="white"> Téléphone : (+216) 00000000</font></p>
        <p class="mail"><font color="white"><a href="mailto:RebelAdvertisingtn@gmail.com"> E-mail</a> : RebelAdvertisingtn@gmail.com </font></p>
        <p class="rs"> Suivez-nous  </p>
        <a href="https://www.facebook.com/RebelAdvertisingTn/"><img src="../img/facebook_icon.png" ; alt="fb" class="icon2" ></a>
        <a href="#"><img src="../img/Instagram_icon.png" ; alt="ins" class="icon2" ></a>
        <a href="#"><img src="../img/linkedin_icon.png" ; alt="fb" class="icon2" ></a>
    </div>

</footer>
</body>
<script src="https://uhchat.net/code.php?f=85a77d"></script>
<footer><div class="copy"><p>&copy; Copyright 2019 Rebel Advertising</p></div></footer>
</html>

