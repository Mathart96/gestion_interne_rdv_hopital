<!DOCTYPE html>
<html>
<head>
	<title>AjoutRdv</title>
	<meta charset="utf-8">
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
			<li><a href="../index.php"class="btn btn-success">ACCUEIL</a></li>
			<li><a href="Liste_rdv.php" class="btn btn-success">GESTION RENDEZ VOUS</a></li>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
		</ul>
				<a href="../index.php" class="btn btn-info"> Deconnexion</a>

		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading navbar navbar-expand-sm bg-info navbar-info" > FORMULAIRE D'AJOUT DE RDV</div>
			<div class="panel-body">
				<form method="POST" action="../Traitement/TAjoutRdv.php">
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" class="form-control">
					</div>
					<div class="form-group">
						<label>Prenom</label>
						<input type="text" name="prenom" class="form-control">
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="date" name="age" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Telephone</label>
						<input type="text" name="telephone" class="form-control">
					</div>
					<div class="form-group">
						<label>Adresse</label>
						<input type="text" name="adresse" class="form-control">
					</div>
					<div class="form-group">
						<label>Date de rdv</label>
						<input type="date" name="pass" class="form-control">
					</div>
					<button type="submit" name="valider" class="btn btn-success">Envoyer</button>
					<button type="reset" name="annuler" class="btn btn-warning">annuler</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>