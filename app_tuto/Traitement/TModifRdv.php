<?php 
	if(isset($_POST['valider'])){
		$name = $_GET['nom,prenom,age,adresse']; //variable nom apres modification

		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$telephone = $_POST['telephone'];
		$adresse = $_POST['adresse'];
		$pass = $_POST['pass'];
		$obj = $nom.";".$prenom.";".$age.";".$email.";".$telephone.";".$adresse.";".$pass."\n" ; //contenu du fichier Rdv.csv

		$f = fopen("..Classeur/Rdv.csv", "r");
		$tmp = fopen("../Classeur/tmp.csv", "w");
		while ($tab = fgetcsv($f, 1000, ";")) {
			if ($tab[0] != $name) {
				$svg = $tab[0].";".$tab[1].";".$tab[2].";".$tab[3].";".$tab[4].";".$tab[5].";".$tab[6]."\n";// contenu du fichier tmp.csv
				fputs($tmp, $svg);
			}
		}

		fputs($tmp, $sobj);
		fclose($f); //ferme le fichier
		fclose($tmp);
		copy("../Classeur/tmp.csv" , "../Classeur/Rdv.csv"); //copie un fichier
		unlink("../Classeur/tmp.csv"); //Supprime un fichier
		header("location:../View/Liste_rdv.php");
	}
?>