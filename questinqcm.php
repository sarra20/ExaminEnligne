<?php

require("connexion.php");

$Descrptions3= $_POST["Descrptions3"];
//$penderation4=$_POST['penderation4'];
$idexamen=$_POST["idexamen3"];


$type="fichier";
$id=rand(1,20);


if(empty($_POST["Descrptions3"])==true)
{ echo "Veuillez remplir les champs obligatoire";}
else
{  $reqAjout="insert into question values($id,'$Descrptions3',$id,$id,'$type',$idexamen)";
 $resultat=mysql_query($reqAjout);
 
 if($resultat) { $_SESSION["IDExamen"]=$IDExamen;
                   header("Location:question.php");
                  
				   }
   else { echo '<body onLoad="alert(\'Ajout non effectué..\')">';
          echo '<meta http-equiv="refresh" content="0;URL=examen.html">';
        } }






?>