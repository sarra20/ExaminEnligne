<?php 
$idReponse=$_POST["idReponse"];
$Contenu=$_POST["Contenu"];
$idQuestion=$_POST["idQuestion"];
$CompteRendu=$_POST["CompteRendu"];
$NumEtudiant=$_POST["NumEtudiant"];

$req="select * from reponse ";

?>







<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            file_put_contents('exemple.txt', '$idReponse');
        ?>
        <!-- <p>Un paragraphe</p> -->
    </body>
</html>