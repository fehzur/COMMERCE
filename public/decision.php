<?php
session_start();
require('bdd.php');



if(!empty($_GET['id']) AND !empty($_POST['ACCORDER']))
{
    $accorder=$_POST['ACCORDER'];
    $getid= $_GET['id'];
    $test=$bdd->prepare('SELECT decision FROM msg WHERE id_auteur=?');
    $test->execute(array($getid));
    if($teste=$test->fetch()){

    $envoye=$bdd->prepare('UPDATE msg SET decision=?');
    $envoye->execute(array($accorder));

}
}else if (!empty($_GET['id']) AND !empty($_POST['REFUSER']))
{
    $refuser=$_POST['REFUSER'];
    $getid= $_GET['id'];
    $test=$bdd->prepare('SELECT decision FROM msg WHERE id_auteur=?');
    $test->execute(array($getid));
    if($teste=$test->fetch()){

    $envoye=$bdd->prepare('UPDATE msg SET decision=?');
    $envoye->execute(array($refuser));

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.css">
    <title>DECISION DE L'ADMINISTRATEUR</title>
    <style>
        body{
            margin: 0;
            padding:0;
            background: url(../image/pexels-eberhard-grossgasteiger-1612461.jpg);
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
        .body{
            margin: 10% 25%;
            box-sizing: border-box;
            padding: 5% 0;
            text-align: center;
            color: white;
            line-height: 2.5vw;
            font-size: 1.2vw;
            border-radius: 10px;
        }
        .body #area{
            border: none;
        }
        label{
            position: relative;
            bottom: 4vw;
            color: #555;
            font-weight: bold;
        }
        .body input:focus~label,
        .body input:valid~label{
            position: relative;
            top: -6vw;
            left: 2vw;
            color: black;;
        }
        #decision{
            box-sizing: border-box;
            padding-bottom: 45px;
            width: 100%;
            height: 5vw;
        }
        </style>
</head>
<body>
<div class="navbar">
    <img id="bonjour" src="../image/5.png" id="bonjour">
        <div class="menubar">
            <ul>
                <li><a href="../index.php" style="color:#999"><i class="fa fa-home"> ACCUEIL</i></a></li>
                <li><a href="codeclient.php"><i class="fa fa-shopping-cart"> CODE CLIENT</i></a></li>
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
        <h1>VOTRE DECISION A ETE BIEN ENVOYER</h1>
    </div>
</body>
</html>