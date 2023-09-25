<?php 
session_start();
require('bdd.php');
if(!empty($_POST['code'])){
    $code=$_POST['code'];
    $change=$bdd->prepare('UPDATE administrateur SET code=?');
    $change->execute(array($code));
}
    $recupUser=$bdd->query('SELECT*FROM administrateur');
    $test=$recupUser->fetch()['code'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.css">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding:0;
        }
        .navbar #bonjour{
            width: 5vw;
            position: absolute;
            top: 4vw;
            left: 48vw;
        }
        .menubar ul{
            display: flex;
            justify-content: space-evenly;
    padding-inline-start: 0;
    padding: 1vw 0;
    margin: 0;
        }
        .menubar li{
            margin-left: 2vw;
            list-style-type: none;
        }
        .menubar a{
            text-shadow: 5px 5px 5px black;
            text-decoration: none;
            color: white;
            font-size: 1.3vw;
        }
        .menubar{
            background: blue;
        }
        @keyframes logo{
            0%{
                right: 0%;
            }
            25%{
                right: 53%;
            }
            50%{
                right:90%;
            }
            75%{
                right: 53%;
            }
            100%{
                right: 0%;
            }
        }
        @keyframes logo1{
            0%{
                left: 0%;
            }
            25%{
                left: 55%;
            }
            50%{
                left:90%;
            }
            75%{
                left: 55%;
            }
            100%{
                left: 0%;
            }
        }
        .produit{
        }
        .produit ol{
            width: 70%;
            color: white;
            text-shadow: 5px 5px 5px black;
            font-weight: bold;
            margin: 15%;
            font-size: 2.5vw;
        }
        .fiverenana p{
            position: relative;
            top: 5vw;
            text-shadow: 5px 5px 5px;
            font-weight: bold;
            width: 100%;
            font-size: 2.5vw;
        }
        .flexena{
            display: flex;
        }
        .fiverenana{
            border-bottom: 1px solid black;
            background-size: cover;
            margin: 1% 5%;
            font-size: 1vw;
        }
        .animation1 img{
            animation-name: logo;
            position: absolute;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            width: 8vw;
        }
        .animation2 img{
            animation-name: logo1;
            position: absolute;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            width: 8vw;
            margin-top:0.5vw;
        }
        .animation{
            background: linear-gradient(to left, blue, white, blue);
            height: 5vw;
        }
        @media screen and (max-width: 584px){
            .tree{
                display: none;
            }
        }
        @media screen and (max-width: 463px){
            .two{
                display: none;
            }
        }
        .navmes{
            margin: 0 30%;
        }
        .navmes input{
            width:60%;
            margin: 0.5% auto;
            padding: 0.3vw;
            border-radius: 10px;
            border: none;
        }
        .navmes i{
            position: relative;
            left: -30px;
            top:0.1vw;
        }
        .body{
            margin: 1% 25%;
            margin-bottom: 10%;
            box-sizing: border-box;
            padding: 5% 0;
            text-align: center;
            color: white;
            line-height: 2.5vw;
            font-size: 1.2vw;
            border-radius: 10px;
        }
        .body img{
            position: absolute;
            top: 15vw;
            left: 62vw;
            border-radius: 20px;

        }
        .body textarea{
            width: 100%;
            border-radius: 1px;
        }
        .body h1{
        }
        #message{
            background: url(../image/abstract-flowing-lines-background.jpg);
            font-weight: bold;
            border: 1px solid #bbb;
            color: white;
            border-radius: 15px;
            box-shadow: 5px 5px 10px black;
        }
        .footer1{
            display: flex;
            justify-content: space-around;
            text-align: center;
            color: white;
            text-align: left;
            line-height: 60px;
        }
        .footer2{
            display: flex;
            justify-content: space-between;
            color: white;
        }
        footer a{
            color: #bbb;
            text-decoration: none;
        }
        .tree input{
            background: #125;
            border: none;
            width: 75%;
            color: white;
        }
        #inp{
            color: white;
            border: none;
            width: 20%;
        }
        .teste{
            display: flex;
        }
        .teste img{
            width: 2vw;
            margin: 0 1vw;
        }
        footer h1 a{
            color: white;
        }
        .tree h1, h3{
            color: #bbb;
        }

        body{
            margin: 0;
            padding:0;
            background: url(../image/abstract-flowing-lines-background.jpg);
            background-attachment: scroll;
            background-size: cover;
        }
        .navbar{
            position: fixed;
            top: 0;
            width:100%;
        }
        .menubar{
            background: rgba(17, 34, 85, 0.89);
        }
        .menubar ul{
            display: flex;
            justify-content: space-evenly;
            padding-inline-start: 0;
            padding: 1vw 0;
            margin: 0;
        }
        .animation{
            background: linear-gradient(to left, rgba(17, 34, 85, 0.89), rgba(255, 255, 255, 0.568), rgba(17, 34, 85, 0.89));
            height: 5vw;
        }
        @media screen and (max-width: 927px){
            #bonjour{
            width: 5vw;
            position: absolute;
            top: 5vw;
            left: 48vw;
        }
        }
        @media screen and (max-width: 600px){
            #bonjour{
            width: 5vw;
            position: absolute;
            top: 6vw;
            left: 48vw;
        }
        }
        @media screen and (max-width: 448px){
            .navbar img{display: none;
        }
        }
        .body{
            margin-top: 10%;
        }
        footer{
            background: rgba(17, 34, 85, 0.89);
            color: #bbb;
            width:100%;
        }
        .body input{
            padding: 2.5%;
            background: green;
            border:none;
            border-radius: 15px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
    <img id="bonjour" src="../image/5.png" id="bonjour">
        <div class="menubar">
            <ul>
                <li><a href="../index.php" style="color:#999"><i class="fa fa-home"> ACCUEIL</i></a></li>
                <li><a href=""><i class="fa fa-shopping-cart"> CODE CLIENT</i></a></li>
                <li><a href="messages.php"><i class="fa fa-envelope-open"> MESSAGES</i></a></li>
                <li><a href=""><i class="fa fa-calendar"></i> CALENDRIER</a></li>
                <li><a href="deconnexion.php" style="color:red"><i class="fa fa-cancel"> DECONNEXION</i></a></li>
            </ul>
        </div>
    <div class="animation">
        <div class="animation1">
            <img src="../image/3.png" alt="">
        </div>
        <div class="animation2">
            <img src="../image/4.png" alt="">
        </div>
    </div>
    </div>
<div class="body">
    <h1>Votre code client est "<?= $test; ?>" </h1><br>
    <form action="" method="POST">
        <input type="text" name='code'>
    <input type="submit" name="modifier" value="CHANGER">
    </form>
</div>

<footer>
        <div class="footer1">
        <div class="one">
            <h1><a href="">Shop NewVave</a></h1>
            <p><a href="">Just the NewWave</a></p>
            <p><a href="">The Trial Kit</a></p>
            <p><a href="">WholeSale & Bulk</a></p>
            <p><a href="">Teaware</a></p>
        </div>
        <div class="two">
            <h1><a href="">Learn</a></h1>
            <p><a href="">NewWave Recipes</a></p>
            <p><a href="">Caffeine Content</a></p>
            <p><a href="">Health Benefits</a></p>
        </div>
        <div class="tree">
            <h1><a href="">Let's Stay Connected</a></h1>
            <h3>Enter your e-mail to unlock 10% OFF</h3>
                <form action="" method="POST">
                <input type="email" placeholder="Merci d'entrer votre e-mail">
                <input type="submit" value="envoyer" id="inp">
                <hr>
                </form>
            <h1>Follow us</h1>
            <div class="teste">
                <img src="../image/facebook.png" >
                <img src="../image/chrome.png">
                <img src="../image/twiter.png">
            </div>
        </div>
        </div>
        <div class="footer2">
            <p>&copy; Copyright-Fehizoro ANTSANIAINA</p>
            <p>Terms of services | Privacy Policy | Refund policy | Accessibility Policy</p>
        </div>
    </footer>
</body>
</html>