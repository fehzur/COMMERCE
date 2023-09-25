<?php
session_start();
if(!$_SESSION['code'] || !empty($_SESSION['email'])){
    header('location: login.php');
}
require('bdd.php');
if(!empty($_POST['email']) and !empty($_POST['name']) and !empty($_POST['mdp']) and !empty($_POST['cmdp']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    $cmdp=$_POST['cmdp'];

    if($mdp==$cmdp){
        $inscr=$bdd->query('SELECT*FROM users');
        $emailverif=$inscr->fetch()['email'];
        if($email==$emailverif){
            echo "l'email entrez existe déjà";
        }else{
            $inscr=$bdd->prepare('INSERT INTO users (nom, email, mdp) VALUES (?,?,?)');
            $inscr->execute(array($name, $email, $mdp));
            header('location:login.php');
        }
    }else{
        echo"Mots de passe non identique";
    }
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIVEZ-VOUS GRATUITEMENT</title>
    <style>
        body{
            margin: 0;
            background-image: url(../image/inscriptions.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .navbar{
            display: flex;
            width: 100%;
            justify-content: right;
        }
        .navmenu ul{
            display: flex;
            margin-right: 100px;
        }
        .navbar ul li{
            padding-left:5%;
            list-style-type: none;
        }
        .navbar a{
            display: block;
            text-decoration: none;
            text-shadow: 2px 2px black;
            color: white;
            font-size: 1vw;
        }
        .navbar a:hover{
            color: red;
        }
        fieldset{
            text-align: center;
            background: rgba(10, 10, 250, 0.753);
            font-size: 1vw;
            color: white;
            text-shadow: 5px 5px 10px black;
            border-radius: 15px;
            border: none;
        }
        fieldset tr{
            display: flex;
            justify-content: space-between;
        }
        .logo img{
            width: 5vw;
        }
        .body{
            margin-left: 6.4vw;
            margin-right: 50%;
            margin-top: 12%;
        }
        table td{
            padding-top: 5%;
        }
        .nul{
            text-align: center;
        }
        fieldset input:hover{
            border: none;
        }
        input{
            width: 65%;
            padding: 1%;
            margin: 2% 0;
            border: none;
            border-bottom: 1px solid #bbb;
        }
        .body{
            color: #555;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
        }
        .body h1{
            color: #333;
            font-size: 2vw;
            margin-left: 3vw;
        }
        .body p{
            font-size: 1vw;
        }
        #check{
            margin:0;
            width: 2%;
            margin-right: 2%;
        }
        input i{
            font-size: 1vw;
        }
        .check{
            text-align: left;
            display: flex;
            margin-left: 7.5vw;
        }
        @media screen and (max-width: 952px){
            body{
                background: url(../image/abstract-flowing-lines-background.jpg);
                background-size: 500vw;
            }
            .body{
                margin: 0;
            }
            .body h1{
                color: #CCC;
                font-size: 3vw;
            }
            .body p{
                color: #DDD;
                font-size: 2vw;
            }
            input{
                color: blue;
                width: 45%;
            }
            #envoyer{
                width: 20%;
            }
            .check{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navmenu">
        </div>
    </div>

    <div class="body"><h1>VOULEZ VOUS NOUS SUIVRE ?</h1>
    <p>Alors, inscris-toi gratuitement</p>
        <p>Remplis tous les champs avec votre réelle information</p>
        <br>
        <br>
        <br><form action="" method="POST">
            <input type="name" name="name" placeholder="Comment vous-appellez vous ?" required><br>
            <input type="email" name="email" placeholder="Merci d' entrer votre nouvelle e-mail" required><br>
            <input type="password" name="mdp" placeholder="Entrez votre mots de passe" required><br>
            <input type="password" name="cmdp" placeholder="Veuillez ré-entrez votre mots de passe ci-dessus"required>
            <br>
            <div class="check">
            <input type="checkbox" required id="check">
            <p>Je suis d'accords avec la condition et les confidentialité de ce site.</p>
            </div><br>
            <input type="submit" style="background: blue; color: white;border-radius: 5px;" value="INSCRIPTION" id="envoyer" ><br>
            <p>Avez-vous déjà un compte NEW WAVE ?</p>
            <p>Veuillez vous connecter à votre compte en cliquant <a href="../index.php">ici</a></p>
    </div>
    <footer>
    <div class="premier">
    <div class="deuxieme">
    </div>
    </div>
    </footer>
</body>
</html>