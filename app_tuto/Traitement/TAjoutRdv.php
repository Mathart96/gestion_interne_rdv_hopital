<?php 
	if(isset($_POST['valider'])){
		//recuperation des donnees du formulaire 
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$telephone = $_POST['telephone'];
		$adresse = $_POST['adresse'];
		$pass = $_POST['pass'];

		$f = fopen("../Classeur/Rdv.csv","a");
		$obj = $nom.";".$prenom.";".$age.";".$email.";".$telephone.";".$adresse.";".$pass."\n"; //contenu du fichier
		fputs($f, $obj);
		
		header("location:../View/Liste_rdv.php?ok=true");
	}


?>