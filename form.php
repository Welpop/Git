<form method='POST' enctype="multipart/form-data">
	<input type="file" name="photo">
	<button>Envoyer le fichier</button>
</form>

<?php 
	if(isset($_FILES['photo'])){
		// Je configure ma limite en Ko
		$limit = 512;
		//un tableau avec les extensions autorisées
		$checkExts=array('jpg','jpeg','gif','png');
		$name = uniqid().$_FILES['photo']['name'];
		$extension = pathinfo($_FILES['photo']['name'])['extension'];
		// Je convertis la taille du fichier en Ko
		$size = $_FILES['photo']['size'] / 1024;
		if($size < $limit){
			if(!is_dir('upload')){
				mkdir('upload');
			}
			move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__."/upload/".$name);
		}else{
			echo "Votre fichier est trop gros.";
		}
	}

?>