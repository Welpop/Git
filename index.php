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

//fonctions équivalentes pour lire un fichier
echo file_get_contents("texte.log");
//équivalence pour écrire dans un fichier
$content= file_get_contents("texte.log");
$content.=date('Y-m-d H:i:s')." : FPC le script a été ouvert\r \n";
file_put_contents("texte.log", $content);

/*//supression de fichier
unlink("texte.log");
*/

//vérifier si le fichier existe
if(file_exists("texte.log")){
	echo "Le fichier texte.log existe";
}

//vérifier si un répertoire var existe, et le créer si besoin
if(!is_dir('var')){
	mkdir("var");
}
//modifier les permissions d'un fichier
chmod('text.txt',0644);

//déplacer ou renommer un fichier
rename('texte.log','var/texte.log');

//récupérer le nom du dossier courant
//récupérer le chemin du fichier courant
echo __DIR__;
echo dirname(__FILE__); //équivalent à echo __DIR__;
echo __FILE__;

//récupérer la date de dernière modification d'un fichier
echo date('d/m/Y à H:i:s',filemtime("var/texte.log"));

//copier un fichier
copy('var/texte.log', "var/texte.log.backup");



//PHP 7
//spaceship operator => renvoie 0 si les valeurs sont égales 1 si gauche > droite et -1 si droite > gauche
echo 2 <=> 2;

//null coalesce operator
if(isset($_GET['id'])){
	$id= $_GET['id'];
}else{
	$id ="1";
}

$id=$_GET['id']??"1";
echo $id;

//try catch
try{
	echo ('test');
	throw new Exception("Error Processing Request", 1);
}catch(Exception $e){
	var_dump($e);
}

?>