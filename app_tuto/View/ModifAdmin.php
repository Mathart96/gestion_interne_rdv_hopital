<?php 
	if(isset($_GET['ok'])){
		$nom = $_GET['ok'];
		$f = fopen("../Classeur/Rdv.csv", "r");
		while ($tab = fgetcsv($f, 1000, ";")){
			if ($nom == $tab[0]) {
				$pass == $tab[1];
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ModifAdmin</title>
	<meta charset="utf-8">
	<meta name="vieport">
	<link rel="stylesheet" type="text/css" href="./style/css/bootstrap.css">
</head>
<body>
	<?php 
		if(isset($_GET['ok'])){
			if($_GET['ok'] == true){
				echo "<div class='alert alert-success'>Admin ajouter avec success</div>";
			}
			else{
				echo "<div class='alert alert-danger'> Admin non ajouter</div>";
			}
		}

	?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li><a href="Liste_rdv.php"class="btn btn-success">GESTION RDV</a></li>
			<li><a href="Liste_admin.php"class="btn btn-success">GESTION DES TRAVAILLEURS</a></li>
		</ul>
		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading navbar navbar-expand-sm bg-info navbar-info"> FORMULAIRE de Modification</div>
			<div class="panel-body">
				<form method="POST" action="../Traitement/TModifAdmin.php?nom=<?php echo $nom?>">
					<div class="form-group">
						<label>matricule</label>
						<input type="text" name="mat" class="form-control" value="<?php echo $mat;?>">
					</div>
					<div class="form-group">
						<label>votre Nom</label>
						<input type="text" name="nom" class="form-control" value="<?php echo $nom;?>">
					</div>
					<div class="form-group">
						<label>votre prenom</label>
						<input type="text" name="prenom" class="form-control" value="<?php echo $prenom;?>">
					</div>
					</div>
					<div  class="form-group">
						<label>Sexe</label>
						<label class="radio-inline"><input type="radio" name="sexe" value="Masculin">Masculin</label>
						<label class="radio-inline"><input type="radio" name="sexe" value="Feminin">Feminin</label>
					</div>
					<div class="form-group">
						<label>Date de naissance</label>
						<input type="Date" name="naissance" class="form-control">
					</div>
					<div>
						<label>Service</label>
						<select name="Service">
							<option value="">Faite votre choix</option>
							<!--<?php 
								$f = fopen("../Classeur/Rdv.csv" );
								while ($tab = fgetcsv($f, 1000, ";")) {
									echo "<option value='$tab[0]'>$tab[0]</option>";
								}

							?> -->

							<option value=""> secretaire</option>
							<option value=""> Docteur</option>
							<option value=""> administrateur</option>
						</select>
					</div>
					<button type="submit" name="valider" class="btn btn-success">Envoyer</button>
					<button type="reset" name="annuler" class="btn btn-warning">annuler</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>