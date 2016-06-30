<?php 
	
	
// Pour lire un fichier avec fopen, j'ouvre le fichier
$file = fopen("texte.txt", "r");
// Avec fread, je peux lire le fichier, je dois lui donner une taille
var_dump(fread($file, filesize("texte.txt")));
// Je ferme le fichier
fclose($file);



?>