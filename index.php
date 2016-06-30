<?php 
	

// Pour lire un fichier avec fopen, j'ouvre le fichier
$file = fopen("text.txt", "r");
// Avec fread, je peux lire le fichier, je dois lui donner une taille
var_dump(fread($file, filesize("text.txt")));
// Je ferme le fichier
fclose($file);

//popur écrire dans un fichier
$file =fopen('texte.log',"a");
fwrite($file, date("Y-m-d H:i:s").": le script a été ouvert \r \n");
fclose($file);

?>