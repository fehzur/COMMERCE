<?php 
function afficher()
{
    if(require('bdd.php'))
    {
        $afficher=$bdd->prepare('SELECT*FROM produits ORDER BY id_produits ASC');
        $afficher->execute();
        $data=$afficher->fetchAll(PDO::FETCH_OBJ);
        return $data;

        $afficher->closeCursor();
    }
}

?>