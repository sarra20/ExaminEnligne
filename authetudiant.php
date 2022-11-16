<?php
//integrer le fichier connexion.php
require("connexion.php");
$NumEtudiant=$_POST["NumEtudiant"];

$mdp=$_POST["mdp"];
//d�finir la requete

$req="select * from etudiant where NumEtudiant=$NumEtudiant and mdp='$mdp'";

//ex�cuter notre requete
$result=mysql_query($req);

//parcourir le resutat et afficher les lignes
$ligne=mysql_fetch_row($result);
/*while($ligne=mysql_fetch_row($result))
{$nom=$ligne[2];
$prenom=$ligne[3];}*/

 if($ligne==0){
header("Location: login.html");


}
else{
// $nom=$ligne[2];
// $prenom=$ligne[3];
session_start();

$_SESSION['nom']=$nom;
$_SESSION['pernom']=$prenom;

$_SESSION['NumEtudiant']=$NumEtudiant;
$_SESSION['mdp']=$mdp;
header("Location: creerExamen.php");
}



?>
