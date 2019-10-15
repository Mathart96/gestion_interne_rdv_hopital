<?php 
	if(isset($_GET['ok'])){
		$nom = $_GET['ok'];
		$prenom = $_GET['ok'];
		$age = $_GET['ok'];
		$email= $_GET['ok'];
		$telephone = $_GET['ok'];
		$adresse = $_GET['ok'];
		$pass = $_GET['ok'];
		$f = fopen("../Classeur/Rdv.csv", "r");
		while ($tab = fgetcsv($f, 1000, ";")){
			if ($nom == $tab[0]) {
				$prenom == $tab[1];
				$age == $tab[2];
				$email == $tab[3];
				$telephone == $tab[4];
				$adresse == $tab[5];
				$pass == $tab[6];

			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ModifRdv</title>
	<meta charset="utf-8">
	<meta name="vieport">
	<link rel="stylesheet" type="text/css" href="./style/css/bootstrap.css">
</head>
<body>
	<?php 
		if(isset($_GET['ok'])){
			if($_GET['ok'] == true){
				echo "<div class='alert alert-success'>RDV ajouter avec success</div>";
			}
			else{
				echo "<div class='alert alert-danger'> RDV non ajouter</div>";
			}
		}

	?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li><a href="Liste_rdv.php"class="btn btn-success">GESTION RENDEZ VOUS</a></li>
			<li><a href="Liste_admin.php"class="btn btn-success">GESTION ADMINISTRATEUR</a></li>
		</ul>
		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="navbar navbar-expand-sm bg-info navbar-info"> Formulaire de modification</div>
			<div class="panel-body">
				<form method="POST" action="../Traitement/TModifRdv.php?prenom=<?php echo $nom; echo $prenom; echo($age)?>">
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" class="form-control" value="<?php echo $nom;?>">
					</div>
					<div class="form-group">
						<label>Prenom</label>
						<input type="text" name="prenom" class="form-control" value="<?php echo $prenom;?>">
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="date" name="age" class="form-control" value="<?php echo $age;?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" value="<?php echo $email;?>">
					</div>
					<div class="form-group">
						<label>Adresse</label>
						<input type="text" name="adresse" class="form-control" value="<?php echo $adresse;?>">
					</div>
					<div class="form-group">
						<label>Date de rdv</label>
						<input type="text" name="pass" class="form-control" value="<?php echo $pass;?>">
					</div>
					<button type="submit" name="valider" class="btn btn-success">Envoyer</button>
					<button type="reset" name="annuler" class="btn btn-warning">annuler</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>