<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rebel Advertising</title>
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/main.css" type="text/css">

    <!-- Font Awesome -->
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
        <img src="../img/logo.png" alt="logo" class="logo" >

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
<!-- Section: Contact v.1 -->
<section class="my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact</h2>
    <!-- Section description -->

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5 mb-lg-0 mb-4">
           <form method="post" action="../php/mail.php"
            <!-- Form with header -->
            <div class="card">
                <div class="card-body">
                    <!-- Header -->
                    <div class="form-header blue accent-1">
                        <h3 class="mt-2"><i class="fas fa-envelope"></i> Contactez-nous:</h3>
                    </div>
                    <!-- Body -->
                    <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="form-name" class="form-control" name="nom">
                        <label for="form-name">Nom</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="text" id="form-email" class="form-control" name="email">
                        <label for="form-email">Email</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-tag prefix grey-text"></i>
                        <input type="text" id="form-Subject" class="form-control" name="objet">
                        <label for="form-Subject">Sujet</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                        <textarea id="form-text" class="form-control md-textarea" rows="3" name="message"></textarea>
                        <label for="form-text">Message</label>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-light-blue" type="submit" value="Submit">
                    </div>
                </div>
            </div>
            <!-- Form with header -->
        </form>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7">

            <!--Google map-->
            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.6688937618933!2d10.252650824570608!3d36.859408167527015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2caae9fbaf2d7%3A0xdb9a20a4f32cfaba!2sR%C3%A9sidence+Narjess%2C+2045!5e0!3m2!1sfr!2stn!4v1553592192553" width="850" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>
            <!-- Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                        <i class="fas fa-map-marker-alt"></i>
                    </a>
                    <p>Résidence Narjess Bloc C3 2éme étage Appt C321</p>
                    <p class="mb-md-0">Les jardins d'El Aouina Tunis</p>
                </div>
                <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                        <i class="fas fa-phone"></i>
                    </a>
                    <p>+(216) 00000000</p>
                    <p class="mb-md-0">Lundi-Samedi, 9:00-18:00</p>
                </div>
                <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="mailto:RebelAdvertisingtn@gmail.com"><p>RebelAdvertisingtn@gmail.com</p></a>
                </div>
            </div>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->
<footer>
    <div class="prefooter">
        <h3 class="h3">A propos </h3>
        <p class="add"> <font color="white"> Adresse : Résidence Narjess Bloc C3 2éme étage Appt C321 Les jardins d'El Aouina Tunis</font></p>
        <p class="ph"><font color="white"> Téléphone : (+216) 00000000</font></p>
        <p class="mail"><font color="white"><a href="mailto:RebelAdvertisingtn@gmail.com"> E-mail</a> : RebelAdvertisingtn@gmail.com </font></p>
        <h4 class="rs"> Suivez-nous  </h4>
        <a href="https://www.facebook.com/RebelAdvertisingTn/"><img src="../img/facebook_icon.png" ; alt="fb" class="icon2" ></a>
        <a href="#"><img src="../img/Instagram_icon.png" ; alt="ins" class="icon2" ></a>
        <a href="#"><img src="../img/linkedin_icon.png" ; alt="fb" class="icon2" ></a>

    </div>

</footer>






</body>
<script src="https://uhchat.net/code.php?f=85a77d"></script>
<footer><div class="copy"><p>&copy; Copyright 2019 Rebel Advertising</p></div></footer>

</html>

