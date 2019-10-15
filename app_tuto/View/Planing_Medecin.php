<!DOCTYPE html>
<html>
<head>
	<title> Liste Rdv </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/css/bootstrap.css">
	<script type="text/javascript" src="./style/script/script.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li><a href="../index.php" class="btn btn-success">ACCUEIL</a></li>
			<li><a href="Planing_Medecin.php" class="btn btn-success">PLANING MEDECIN</a></li>
		--------------------------------------------------------------------------------------------------------------------------------
		</ul>
		<a href="AjoutRdv.php" class="btn btn-success"> Ajouter Medecin</a>
		<a href="../index.php" class="btn btn-info"> Deconnexion</a>
		
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="navbar navbar-expand-sm bg-info navbar-info"> Liste des Medecins disponibles</div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<tr>
						<th>NOM</th>
						<th>PRENOM</th>
						<th>AGE</th>
						<th>EMAIL</th>
						<th>TELEPHONE</th>
						<th>ADRESSE</th>
						<th>HEURE DE DIPONIBILTÉ</th>
						<th>ACTION1</th>
						<th>ACTION2</th>
					</tr>
					<tr>
						<?php 
							$f = fopen("../Classeur/Rdv.csv", "r");
							while ($tab = fgetcsv($f,1000,";")) {
								echo "<tr>";
								for($i=0; $i < count($tab); $i++){
									echo "<td>".$tab[$i]."</td>";

								}
								echo "<td><a href='ModifRdv.php?ok=' class='btn btn-info btn-block'>Modifier</a></td>
								 <td><a href='../Traitement/TSuppRdv.php?ok=$tab[0]' class='btn btn-danger btn-block' onclick='return confirmation();'>Supprimer</a></td>";
								echo "</tr>";
							
							}
						?>
					</tr>
				</table>
				
			</div>
		</div>
	</div>

</body>
</html>