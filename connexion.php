<?php
$serveurBD = "localhost"; //nom du serveur
$nomUtilisateur = "root"; //nom utilisateur est toujours root si on travaille en local
$motDePasse = "";
$baseDeDonnees = "bdexamenenligne"; //indiquer le nom de la base de données

//commandes
//se connecter au serveur
@mysql_connect($serveurBD, $nomUtilisateur, $motDePasse) 
or die("Impossible de se connecter au serveur de bases de données.");

//selectionner la base de données à utiliser dans le script
@mysql_select_db($baseDeDonnees) 
or die("Cette base de donnees n'existe pas");



?>


