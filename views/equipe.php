
<?php session_start(); ?>
<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rebel Advertising </title>

    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../css/test.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Lato:900" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">

</head>
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
        echo '<a href="../views/connexion.html" class="conn">Se connecter </a></div></div>';
    }
    ?>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            font-family: 'bulma';
        }

        .nav {
            height: 50px;
            width: 100%;
            background-color: #4d4d4d;
            position: relative;
        }

        .nav > .nav-header {
            display: inline;
        }

        .nav > .nav-header > .nav-title {
            display: inline-block;
            font-size: 22px;
            color: #fff;
            padding: 10px 10px 10px 10px;
        }

        .nav > .nav-btn {
            display: none;
        }

        .nav > .nav-links {
            display: inline;
            float: right;
            font-size: 35px;
        }

        .nav > .nav-links > a {
            display: inline-block;
            padding: 13px 10px 13px 10px;
            text-decoration: none;
            color: #efefef;
        }

        .nav > .nav-links > a:hover {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .nav > #nav-check {
            display: none;
        }

        @media (max-width:600px) {
            .nav > .nav-btn {
                display: inline-block;
                position: absolute;
                right: 0px;
                top: 0px;
            }
            .nav > .nav-btn > label {
                display: inline-block;
                width: 50px;
                height: 50px;
                padding: 13px;
            }
            .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
                background-color: rgba(0, 0, 0, 0.3);
            }
            .nav > .nav-btn > label > span {
                display: block;
                width: 25px;
                height: 10px;
                border-top: 2px solid #eee;
            }
            .nav > .nav-links {
                position: absolute;
                display: block;
                width: 100%;
                background-color: #333;
                height: 0px;
                transition: all 0.3s ease-in;
                overflow-y: hidden;
                top: 50px;
                left: 0px;
            }
            .nav > .nav-links > a {
                display: block;
                width: 100%;
            }
            .nav > #nav-check:not(:checked) ~ .nav-links {
                height: 0px;
            }
            .nav > #nav-check:checked ~ .nav-links {
                height: calc(100vh - 50px);
                overflow-y: auto;
            }
        }
    </style>
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">

            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <img src="../img/logo.png" alt="logo" class="logo" width="5%">

        <div class="nav-links">
            <a href="index.php" target="_self">Acceuil</a>
            <a href="services.php" target="_self">Services</a>
            <a href="references.php" target="_self">Références</a>
            <a href="equipe.php" target="_self">Equipe</a>
            <a href="blog.php" target="_self">Blog</a>
            <a href="contact.php" target="_self">Contact</a>

        </div>
    </div>

    <div  class="banner"></div>
</header>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="/public/js/main.js"></script>

<div class="vision1"></br>
    <div class="ser">
     <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">

                        <img src="../img/miniature_facebook.png" alt="Content marketing" style="width:50%">
                        <div class="caption">
                            <p style="text-align: center";><b></p>

                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                        <img src="../img/miniature_facebook.png" alt="Relations publiques et presse" style="width:50%">
                        <div class="caption">
                            <p style="text-decoration:underline; text-align: center";><b>CEO</p>
                            <p style=" color:#4e4e4e; text-align: center";><b> Oussama ElAissi</p>
                            <p style=" line-height: 200%; color:#999999; text-align: center";>Fondateur de Rebel Advertising leader,passionné,créatif et à l'écoute de sa clientèle.Oussama posséde un bonne expérience dans le domaine afin de vous offrir les meilleurs produits. </p>



                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">

                        <img src="../img/miniature_facebook.png" alt="" style="width:50%">
                        <div class="caption">
                            <p style="text-align: center";><b></p>
                        </div>
                </div>
            </div>

        </div>
    </div>
    </div>


    </a>
</div>
<footer>
    <div class="prefooter">
        <p class="h3">A propos </p>
        <p style="color: white;" class="add"> Adresse : Résidence Narjess Bloc C3 2éme étage Appt C321 Les jardins d'El Aouina Tunis</p>
        <p class="ph"><font color="white"> Téléphone : (+216) 00000000</font></p>
        <p class="mail"><font color="white"><a href="mailto:RebelAdvertisingtn@gmail.com"> E-mail </a> : RebelAdvertisingtn@gmail.com </font></p>

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





