<!DOCTYPE html >
<?php session_start(); ?>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rebel Advertising </title>

    <!-- Fonts -->

    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
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
        <img src="../img/logo.png" alt="logo" class="logo" width="100%">

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

<div class="h1t"><h1  class="title"><font color="white"> Commander </font></h1></div>
<div class="">


    <style type="text/css">
        .tftable {font-size:12px;color:#333333;width:50%;border-width: 1px;border-color: #729ea5;border-collapse: collapse; margin_top:5px;}
        .tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
        .tftable tr {background-color:#d4e3e5;}
        .tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
        .tftable tr:hover {background-color:#ffffff;}
    </style>
    <form   method="post" action="../php/commandes.php">

        <table class="tftable" border="1">

            <tr><th>Services</th><th>Quantité</th><th>Description</th></tr>

            <tr><td><input type="checkbox" id="Choice1" name="service[]" value="Content Mareketing" >
                    <label for="Choice1">Content Marekting</label></td>

                <td><input type="number" name="quantite[]" min="0" max="10" ></td>
                <td rowspan="6" align="center"><textarea class="" id="message" name="message" cols="65" rows="15"></textarea></td></tr>




            <tr><td><input type="checkbox" id="Choice2"
                           name="service[]" value="Relations publiques et presse">
                    <label for="Choice2">Relations publiques et presse</label></p></td>
                <td><input type="number" name="quantite[]" min="0" max="10"></td>






            <tr><td><input type="checkbox" id="Choice3" name="service[]" value="Créations graphiques">
                    <label for="Choice3">Créations graphiques</label></td>
                <td><input type="number" name="quantite[]" min="0" max="10"></td>







            <tr><td><input type="checkbox" id="Choice4" name="service[]" value="Marekting d'influence">
                    <label for="Choice3">Marekting d'infulence</label></td>
                <td><input type="number" name="quantite[]" min="0" max="10"></td>



            <tr><td><input type="checkbox" id="Choice5" name="service[]" value="Community management">
                    <label for="Choice3">Community management</label></td>
                <td><input type="number" name="quantite[]" min="0" max="10"></td>




            <tr><td><input type="checkbox" id="Choice6" name="service[]" value="Production audiovisuel">
                    <label for="Choice3">Production audiovisuel</label></td>
                <td><input type="number" name="quantite[]" min="0" max="10"></td>


                <button style="float: right; margin-top: 300px; margin-right: 550px; " type="submit" class="btn btn-primary" id="submit" > Submit </button>



        </table>
    </form>


</div>
</form>





<footer>
    <div class="prefooter">
        <p class="h3">A propos </p>
        <p class="add"> <font color="white"> Adresse : Résidence Narjess Bloc C3 2éme étage Appt C321 Les jardins d'El Aouina Tunis</font></p>
        <p class="ph"><font color="white"> Téléphone : (+216) 00000000</font></p>
        <p class="mail"><font color="white"><a href="mailto:RebelAdvertisingtn@gmail.com"> E-mail </a> : RebelAdvertisingtn@gmail.com </font></p>

        <p class="rs"> Suivez-nous  </p>
        <a href="https://www.facebook.com/RebelAdvertisingTn/"><img src="../img/facebook_icon.png" ; alt="fb" class="icon2" ></a>
        <a href="#"><img src="../img/Instagram_icon.png" ; alt="ins" class="icon2" ></a>
        <a href="#"><img src="../img/linkedin_icon.png" ; alt="fb" class="icon2" ></a>



    </div>
</footer>


</body>
<footer><div class="copy"><p>&copy; Copyright 2019 Rebel Advertising</p></div></footer>

</html>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29/05/2019
 * Time: 22:34
 */