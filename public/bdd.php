<?php 
try{
$bdd=new pdo('mysql: host=localhost;dbname=commerce', "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(Exception $e)
{
    $e->getMessage();
}

?>