<?php
require('bdd.php');
if(isset($_POST['code'])){

if(!empty($_POST['code']))
{
    $code=$_POST['code'];

    
        $codes=$bdd->prepare('SELECT*FROM administrateur WHERE code=?');
        $codes->execute(array($code));

        if($codes->rowCount()>0){
            session_start();
            $_SESSION['code']=$code;
            header('location:inscription.php');
        }
        else{
            echo"Veuillez verifier votre code...";
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
            margin-top: 20%;
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
            outline-color: red;
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
        .body input:focus~label,
        .body input:valid~label{
            position: relative;
            top: -5vw;
            left: 20px;
            font-size: 20px;
        }
        label{
            position: relative;
            top: -2.6vw;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navmenu">
        </div>
    </div>

    <div class="body"><h1>AVANT DE VOUS INSCRIRE,</h1>
    <p>Veuillez entrez le code de sécurité que vous avez eu chez l'ADMINISTRATEUR</p>
        <p>Si vous ne l'avez pas, veuillez en-demander sur lui.</p>
        <br>
        <br>
        <br><form action="" method="POST">
            <input type="password" name="code" required><br>
            <label for="">Entrez le code de sécurité</label>
            <br>
            <input type="submit" style="background: blue; color: white;border-radius: 5px;" value="SUIVANT" id="envoyer" ><br>
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