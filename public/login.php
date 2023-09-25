<?php
require('bdd.php');
session_start();
if(!empty($_SESSION['email'])){
    header('location: ../index.php');
}else{

if(isset($_POST['email']) and isset($_POST['mdp'])){
    if(!empty($_POST['email']) and !empty($_POST['mdp'])){

$email=$_POST['email'];
$mdp=$_POST['mdp'];

$login=$bdd->prepare('SELECT*FROM users WHERE email=? and mdp=?');
$login->execute(array($email,$mdp));
$data=$login->fetch();
$data1="antsaniainafehizoro@gmail.com";

if($_POST['email']==$data1 && $login->rowCount() >0)
{
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['mdp']=$mdp;
    $_SESSION['id']=$data['id'];
    $_SESSION['nom']=$data['nom'];
    $_SESSION['image']=$data['images'];
    header('location: ../index.php');
}else if($login->rowCount() >0)
{
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['mdp']=$mdp;
    $_SESSION['id']=$data['id'];
    $_SESSION['nom']=$data['nom'];
    $_SESSION['image']=$data['images'];
    header('location: ../userswaves.php');
}else{
    print "Veillez verrifiez votre identifiant";
}

    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <title>LOGIN</title>
    <style>
        @keyframes avion{
            to{
                right: 110%;
            }
            from{
                right: -15%;
            }
        }

        body{
            overflow: hidden;
            margin: 0;
            background-image: url(../image/login.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .navbar{
            display: flex;
            background: rgba(17, 34, 85, 0.89);
            justify-content: space-between;
            width: 100%;
        }
        .avion img{
            animation-name: avion;
            position: absolute;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            width: 10vw;
        }
        .navmenu ul{
            display: flex;
            padding:0;
        }
        .navbar ul li{
            padding-left:5%;
            list-style-type: none;
        }
        .navbar a{
            text-decoration: none;
            text-shadow: 2px 2px black;
            color: white;
            font-size: 1vw;
        }
        .navbar a:hover{
            color: red;
        }
        .navbar li:hover{
            transform: scale(1.2);
        }
        fieldset{
            text-align: center;
            background: #003cff71;
            font-size: 1vw;
            color: white;
            border-radius: 15px;
            border: none;
        }
        fieldset tr{
            display: flex;
            justify-content: space-between;
        }
        .body input{
            width: 90%;
            box-sizing: border-box;
            padding: 1.5%;
            padding-left: 5%;
            margin: 2% 0;
            border: none;
            border-bottom: 1px solid #bbb;
            border-left: 1px solid #bbb;
            border-color: #bbb;
            outline: none;
        }
        #login{
            width: 20%;
            text-align: left;
            border: none;
            font-size:1vw;
        }
        .body h3{
            color: #aaa;
            font-size: 1vw;
        }
        .body h2{
            color: #aaa;
            font-size: 1vw;
        }
        .body h1{
            font-size: 3vw;
            color: #444;
        }
        i{
            position: relative;
            left:-44vw;
            border-right: 0.5px solid #bbb;
            box-sizing: border-box;
            padding-right: 10px;
            color: #BBB;
            font-size: 0.8vw;
        }
        .logo img{
            width: 5vw;
        }
        fieldset a{
            text-decoration: none;
            color: red;
        }
        .body{
            margin-left: 50vw;
            margin-right: 5px;
            margin-top: 10%;
            margin-top: 10%;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        table td{
            padding-top: 5%;
            color: white;
        }
        .nul{
            text-align: center;
        }
        .icone h3{
            margin-top: 8%;
        }
        .icone img{
            width: 4%;
            margin-right: 4%;
        }
        a{
            text-decoration: none;
        }
        @media screen and (max-width: 952px){
            body{
                background: url(../image/abstract-flowing-lines-background.jpg);
                background-size: 600VW;
                background-repeat: no-repeat;
                background-attachment: scroll;
            }
            .body{
                text-align: center;
                margin: 0;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            i{
                font-size: 4vw;
                left:-50px;
                top: 6px;
                border: none;
            }
            #login{
                font-size: 2vw;
            }
            .body h3{
                font-size: 2vw;
            }
            .body h2{
                font-size:2vw;
            }
            .navbar ul li a{
                display: block;
                font-size: 2vw;
            }
            .body input{
                width: 60%;
            }
        }

    </style>
</head>
<body>
    <div class="navbar">
        <div class="navmenu">
            <ul>
                <li><a href="">ACCUEIL</a></li>
                <li><a href="#information">INFORMATIONS</a></li>
                <li><a href="">CONTACT</a></li>
                <li><a href="">CONNEXIONS</a></li>
            </ul>
        </div>
        <div class="avion">
            <img src="../image/avion.png" alt="">
        </div>
    </div>

    <div class="body">
            <form action="" method="POST">
                <h1>Bienvenue à nouveau!</h1>
                <h3>Connectez-vous pour continuer</h3>
            <input type="email" name="email" placeholder="Entrez votre email" required><i class="fa fa-users"></i><br>
            <input type="password" name="mdp" placeholder="Entrez votre mots de passe" required><i class="fa fa-key"></i><br>
            <input type="submit" id="login" style="background: blue; color: white;border-radius: 5px;" value="CONNEXION">
            <h2>Nouveau membres ? <a href="code.php">Inscris-toi ici</a></h2>
            <div class="icone">
            <h3>Suivez-nous sur :</h3>
                <a href="https://myaccount.google.com/?hl=fr&utm_source=OGB&utm_medium=act&pli=1&nlr=1"><img src="../image/chrome.png" alt=""></a>
                <a href="https://www.facebook.com/"><img src="../image/facebook.png" alt=""></a>
                <a href="https://twitter.com/"><img src="../image/twiter.png" alt=""></a>
            </div>
            </form>
    </div>
    <footer>
    <div class="premier">
    <div class="deuxieme">
    </div>
    </div>
    </footer>
</body>
</html>