<?php 
session_start();
require('bdd.php');
if(!$_SESSION['mdp']){
    header('location: ../index.php');
}

if(isset($_SESSION['id']) AND !empty($_SESSION['id'])){
    $getid=$_SESSION['id'];
    $recupUser=$bdd->prepare('SELECT*FROM users WHERE id=?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){
        if(!empty($_POST['numero']) AND !empty($_POST['datedebut']) AND !empty($_POST['datefin']) AND !empty($_POST['etat']) AND !empty($_POST['cause'])){
            $sms= $_POST['cause'];
            $debut= $_POST['datedebut'];
            $fin= $_POST['datefin'];
            $etat= $_POST['etat'];
            $numero= $_POST['numero'];
            $recup=$bdd->prepare('INSERT INTO msg (messages, id_destinataire, id_auteur, numero, date_debut, date_fin, etat ) VALUES (?,?,?,?,?,?,?)');
            $recup->execute(array($sms, 1, $_SESSION['id'], $numero, $debut, $fin, $etat));
            header('location:../userswaves.php');
    }
    }else{
        echo 'Aucun utilisateur trouvé';
    }
}else{
    echo 'Aucune identifiant trouvé';
}



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
        body{
            margin: 0;
            padding:0;
            background: #EEE;
        }
        *{
            margin: 0;
            padding:0;
        }
        .navbar img{
            width: 5vw;
            position: absolute;
            top: 4vw;
            left: 48vw;
        }
        @media screen and (max-width: 927px){
            .navbar img{
            width: 5vw;
            position: absolute;
            top: 5vw;
            left: 48vw;
        }
        }
        @media screen and (max-width: 600px){
            .navbar img{
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
        .menubar ul{
            display: flex;
            justify-content: space-around;
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
        body{
            background: linear-gradient(to left, grey,aqua);
        }
        .body{
            margin: 1% 25%;
            box-sizing: border-box;
            padding: 5% 0;
            background: #555;
            text-align: center;
            color: white;
            line-height: 2.5vw;
            font-size: 1.2vw;
            border-radius: 10px;
        }
        .body textarea{
            width: 100%;
            border-radius: 1px;
        }
        .body h1{
        }
        input, select{
            padding: 1%;
            box-sizing:border-box;
            padding-left:30%;
            width: 80%;
        }
        #message{
            box-sizing:border-box;
            padding-left:20%;
        }
        #envoyer{
            background: blue;
            padding:2%;
            width: 20%;
            color: white;
            border-radius: 15px;
        }
        .box{
            display: flex;
            margin-left: 5vw;
        }
        #box{
            width: 2%;
            margin-right:1%;
        }
        footer{
            background: rgba(17, 34, 85, 0.89);
            color: #bbb;
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
    </style>
</head>
<body>
    <div class="all">
    <div class="navbar">
    <img src="../image/5.png" alt="">
        <div class="menubar">
            <ul>
                <li><a href="../userswaves.php" ><i class="fa fa-home"> ACCUEIL</i></a></li>
                <li><?php
        $recup=$bdd->query('SELECT*FROM users');
        $user=$recup->fetch();
            ?><a style="color:#999" href="usersmessages.php?id=<?= $user['id']; ?>"><i class="fa fa-envelope-open"> DEMANDES DE CONGE</i></a></li>
                <li><a href="deconnexion.php" style="color:red"><i class="fa fa-cancel"> DECONNEXION</i></a></li>
            </ul>
        </div>
    </div>
    <div class="animation">
        <div class="animation1">
            <img src="../image/3.png" alt="">
        </div>
        <div class="animation2">
            <img src="../image/4.png" alt="">
        </div>
    </div>

<div class="body">
    <form action="" method="POST">
        <h1>DEMANDES DE CONGE</h1>
        <label for="">Demande de congé numéro :</label><br>
        <input type="number" name="numero" placeholder="Le nombre de votre congé"><br>
        <label for="">Date de debut de votre congé :</label><br>
        <input type="date" name="datedebut"><br>
        <label for="">Date de fin de votre congé :</label><br>
        <input type="date" name="datefin"><br>
        <label for="">Motif du congé :</label><br>
        <select name="etat" id="">
            <option value="Congé de matérnité">Congé de matérnité</option>
            <option value="Congé payé">Congé payé</option>
            <option value="Congé sans solde">Congé sans solde</option>
            <option value="Congé exceptionnelle">Congé exceptionnelle</option>
        </select><br>
        <label for="">La cause de votre demande de congé :</label><br>
        <input type="text" name="cause" style="height: 5vw;" id="message" placeholder="Entrez ici votre messages suivi de votre cause de congé...">
        <br><div class="box">
            
        <input type="checkbox" id="box" required>
        <p>Vous savez les conséquences de votre demandes de congé ?</p>

        </div>
        <br>
        <input type="submit" value="Envoyer" name="envoyer" id="envoyer">
    </form>
</div>

<section id="message">

    <?php
$recupMessage=$bdd->prepare('SELECT*FROM msg WHERE id_auteur=? AND id_destinataire=? OR id_auteur=? AND id_destinataire=?');
$recupMessage->execute(array($_SESSION['id'], $getid, $getid, $_SESSION['id']));
while($message=$recupMessage->fetch()){
    ?>
    <p><?= $message['messages']; ?></p>
    <?php
}
    ?>

</section>


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