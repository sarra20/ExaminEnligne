<?php

require("connexion.php");
$Descrptions1=$_POST["Descrptions1"];
//$penderation2=$_POST["penderation2"];
$choix1= $_POST["choix1"];
$choix2= $_POST["choix2"];
$choix3= $_POST["choix3"];
$id=rand(1,30);
 $type="choixmultiple";
 $rep=$choix1.'/'.$choix2.'/'.$choix3;
 $idexamen=$_POST["idexamen"];

if(empty($_POST["Description1"])==false)
{ echo "Veuillez remplir les champs obligatoire";}
else
{ 
 $reqAjout="insert into question values($id,'$Descrptions1',$id,$id,'$type',$idexamen)";
 $resultat=mysql_query($reqAjout);
 if($resultat) {
 $_SESSION["IDExamen"]=$IDExamen;
  echo '<body onLoad="alert(\'Ajout avec succés effectué..\')">';
                   header("Location:question.php");
                  
				   }
   else { echo '<body onLoad="alert(\'Ajout non effectué..\')">';
          echo '<meta http-equiv="refresh" content="0;URL=examen.html">';
        }
  }






?>