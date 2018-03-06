<?php

@$prenom=$_SESSION['prenom'];
 
if(!empty($_SESSION['prenom'])) 
{
	echo ("Vous etes connecté: ".$prenom."  Bienvenue!!!");
	echo ("<br/>");
}
else 
{
	echo ("<h5>Vous  n'etes pas connecter,cliquer sur connection pour vous connecter<h5>");
}
?>