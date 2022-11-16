<?php
/*

$dateexamen=$_POST['dateexamen'];
$codeEnseignant=$_SESSION['codeEnseignant'];

*/

session_start();

require("connexion.php");
$IDExamen=$_POST['idexamen'];
$codeexame=$_POST['codeexamen'];
$nomexamen=$_POST['nomexamen'];
$duree=$_POST['duree'];
$dateexamen=$_POST['dateexamen'];
$codeEnseignant=1930356;


if(empty($_POST['idexamen']==true) || empty($_POST['codeexamen']==true) || empty($_POST['nomexamen']==true) || empty($_POST['duree']==true)|| empty($_POST['dateexamen']==true) )
{ echo '<body onLoad="alert(\'Attention vous devez remplir les champs...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=examen.html">';
}
else
{ $reqAjout= "insert into examen values($IDExamen,'$codeexame','$nomexamen',$duree,'$dateexamen',$codeEnseignant)";
   
   $resultat=mysql_query($reqAjout);
   if($resultat) { $_SESSION["IDExamen"]=$IDExamen;
                   $_SESSION["nomexamen"]=$nomexamen;
				   $_SESSION["codeexamen"]=$codeexame;
                   header("Location:question.php");
                  
				   }
   else { echo '<body onLoad="alert(\'Ajout non effectué..\')">';
          echo '<meta http-equiv="refresh" content="0;URL=examen.html">';
        }
}





?>