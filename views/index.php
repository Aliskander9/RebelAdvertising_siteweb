<?php session_start();?>
<!DOCTYPE html >
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable=yes">

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
<body >
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
    <div class="row">

    </div>
    <div >


        <div >
            <div id="my-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#my-carousel" data-slide-to="1"></li>
                    <li data-target="#my-carousel" data-slide-to="2"></li>
                    <li data-target="#my-carousel" data-slide-to="3"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="First slide" src="../img/1.png" class="cimg">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Second slide" src="../img/2.jpg" class="cimg">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Third slide" src="../img/3.jpg" class="cimg">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>


                    <div class="item">
                        <img alt="Fourth slide" src="../img/banner2.jpg" class="cimg">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#my-carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#my-carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <!-- /.carousel-->
        </div>
        <!-- /.container -->

    </div>

    </div>

</header>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="../js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="h1t"><h1  class="title"><font color="white"> Qui sommes nous ? </font></h1></div>
<div class="vision1">

    <p class="p1"> Rebel Advertising vous accompagne comme un véritable Chargé de communication afin de développer votre stratégie de communication.</br>
        Rebel Advertising développera un plan d’action full web afin de développer votre influence, votre chiffre d’affaires et votre marque grâce à des actions
        comme le Community Mangement, Content marketing ou Relations Publiques & Presse.</br>
        On vous accompagnera dans votre stratégie de communication sur les réseaux sociaux. Un plan de communication et media sera établi afin de choisir les bons réseaux, le ton et actions à réaliser pour créer votre communauté.</b></p>
    <p class="p1"> Une équipe jeune et dynamique à votre service. </p>

    <div class="h1t"><h1  class="title"><font color="white"> Ils nous font confiance  </font></h1></div>

    <div>

   <marquee  id="id1" loop="" scrollamount="6" scrolldelay="5"><span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();"> <img src="../img/007.png"width="10%"> <img src="../img/008.png" width="10%"> <img src="../img/009.png" width="10%"> <img src="../img/010.png"width="10%">  <img src="../img/011.png" width="10%"> <img src="../img/012.png" width="10%""><img src="../img/013.png"width="10%"> <img src="../img/014.png" width="10%"> <img src="../img/007.png" width="10%"> <img src="../img/008.png"width="10%">  <img src="../img/009.png" width="10%"> <img src="../img/010.png" width="10%""><img src="../img/011.png"width="10%"> <img src="../img/012.png" width="10%"> <img src="../img/013.png" width="10%"> <img src="../img/014.png"width="10%">  <img src="../img/007.png" width="10%"> <img src="../img/008.png" width="10%""> <img src="../img/009.png" width="10%""> <img src="../img/010.png" width="10%""> <img src="../img/011.png" width="10%""> <img src="../img/012.png" width="10%""> <img src="../img/013.png" width="10%""> <img src="../img/014.png" width="10%""> </span></marquee>

</div><br><br>

 </div>
<div class="h1t"><h1  class="title"><font color="white"> Services </font></h1></div>
<div class="vision1"><br>

<div class="ser">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#services.php" target="_blank">
                        <img src="../img/001.png" alt="Content marketing" style="width:15%">
                        <div class="caption">
                            <p style="text-align: center";><b>Content marketing</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#services.php" target="_blank">
                        <img src="../img/002.png" alt="Relations publiques et presse" style="width:20%">
                        <div class="caption">
                            <p style="text-align: center";><b>Relations publiques et presse</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#services.php" target="_blank">
                        <img src="../img/003.png" alt="créations graphiques" style="width:20%">
                        <div class="caption">
                            <p style="text-align: center";><b>Créations graphiques</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#services.php" target="_blank">
                        <img src="../img/004.png" alt="Marketing d'influence" style="width:22%">
                        <div class="caption">
                            <p style="text-align: center";><b>Marketing d'influence</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#services.php" target="_blank">
                        <img src="../img/005.png" alt="Community management" style="width:25%">
                        <div class="caption">
                            <p style="text-align: center";><b>Community management</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#services.php" target="_blank">
                        <img src="../img/006.png" alt="Production audiovisuel" style="width:18%">
                        <div class="caption">
                            <p style="text-align: center";><b>Production audiovisuel</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <div class="prefooter">
        <h4 class="h3">A propos </h4>
        <p class="add"> <font color="white"> Adresse : Résidence Narjess Bloc C3 2éme étage Appt C321 Les jardins d'El Aouina Tunis</font></p>
        <p class="ph"><font color="white"> Téléphone : (+216) 00000000</font></p>
        <p class="mail"><font color="white"><a href="mailto:RebelAdvertisingtn@gmail.com"> E-mail </a> : RebelAdvertisingtn@gmail.com </font></p>

        <h4 class="rs"> Suivez-nous  </h4>
        <a href="https://www.facebook.com/RebelAdvertisingTn/"><img src="../img/facebook_icon.png" ; alt="fb" class="icon2" ></a>
        <a href="#"><img src="../img/Instagram_icon.png" ; alt="ins" class="icon2" ></a>
        <a href="#"><img src="../img/linkedin_icon.png" ; alt="fb" class="icon2" ></a>



    </div>

</footer>
    <style type="text/css">

        }
        .modal-newsletter {
            color: #999;
            width: 480px;
            font-size: 15px;
        }
        .modal-newsletter .modal-content {
            padding: 40px 50px;
            border-radius: 1px;
            border: none;
        }
        .modal-newsletter .modal-header {
            border-bottom: none;
            position: relative;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .modal-newsletter h4 {
            color: #000;
            text-align: center;
            font-family: 'Lato', sans-serif;
            font-weight: 900;
            font-size: 30px;
            margin: 0 0 25px;
            text-transform: uppercase;
        }
        .modal-newsletter .close {
            position: absolute;
            top: -15px;
            right: -25px;
            color: #c0c3c8;
            text-shadow: none;
            opacity: 0.5;
            width: 22px;
            height: 22px;
            border-radius: 20px;
            font-size: 16px;
            border: 2px solid;
        }
        .modal-newsletter .close:hover {
            opacity: 0.8;
        }
        .modal-newsletter .icon-box {
            color: #d7002f;
            display: inline-block;
            z-index: 9;
            text-align: center;
            position: relative;
        }
        .modal-newsletter .icon-box i {
            font-size: 110px;
        }
        .modal-newsletter .form-control, .modal-newsletter .btn {
            min-height: 46px;
            text-align: center;
            border-radius: 1px;
        }
        .modal-newsletter .form-control {
            box-shadow: none;
            border-color: #dbdbdb;
        }
        .modal-newsletter .form-control:focus {
            border-color: #d7002f;
            box-shadow: 0 0 8px rgba(215, 0, 47, 0.5);
        }
        .modal-newsletter .btn {
            color: #fff;
            background: #d7002f;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            padding: 6px 20px;
            min-width: 180px;
            border: none;
            margin-top: 20px;
            font-family: 'Airal', sans-serif;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
            background: #d7002f;
            outline: none;
        }
        .modal-newsletter .form-group {
            margin-top: 30px;
        }
        .hint-text {
            margin: 100px auto;
            text-align: center;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>



    <div class="row">

        <div class="col-lg-8 loading">


            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-newsletter">
                    <div class="modal-content">
                        <form action="../php/newslettersave.php" method="post">
                            <div class="modal-header">
                                <div class="icon-box">
                                    <i class="material-icons">&#xE151;</i>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
                            </div>
                            <div class="modal-body text-center">
                                <h4>Inscrivez-vous</h4>
                                <p>Abonnez-vous à notre newsletter pour recevoir les dernières mises à jour et promotions.</p>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Entrer votre email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required">
                                    <input type="submit" class="btn btn-primary" value="Inscrivez-vous" onclick="alert('vous êtes inscrit')" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>















        </div>
    </div>
</footer>
</body>
<script src="https://uhchat.net/code.php?f=85a77d"></script>
<footer><div class="copy"><p>&copy; Copyright 2019 Rebel Advertising</p></div></footer>

</html>
