<?php session_start();?>
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
            float:right ;
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





</header>
</body>
</html>
