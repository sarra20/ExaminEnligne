<?php

require("connexion.php");

$Descrptions4= $_POST["Descrptions4"];

$idexamen=$_POST["idexamen4"];


$type="fichier";
$id=rand(1,1000);


if(empty($_POST["Descrptions4"])==true)
{ echo "Veuillez remplir les champs obligatoire";
echo $_POST["Descrptions4"];}
else
{  $reqAjout="insert into question values($id,'$Descrptions4',$id,$id,'$type',$idexamen)";
 $resultat=mysql_query($reqAjout);
 
 if($resultat) { $_SESSION["IDExamen"]=$IDExamen;
                   header("Location:question.php");
                  
				   }
   else { echo '<body onLoad="alert(\'Ajout non effectué..\')">';
          echo '<meta http-equiv="refresh" content="0;URL=examen.html">';
        }}






?>