<?php
require("connexion.php");
$DescrptionsQ=$_POST["DescrptionsQ"];


$nom=60;
$type="text";
$id=rand(1,1300);


$idexamen=$_POST["idexamenQ"];




if(empty($_POST["DescrptionsQ"])==true)
{ echo"Veuillez remplir les champs obligatoire";


}
else
	
{
	

    $reqAjout="insert into question values($id,'$DescrptionsQ',$id,$id,'$type',$idexamen)";

	 $resultat=mysql_query($reqAjout);
 echo "Ajout avec succés"; }





?>