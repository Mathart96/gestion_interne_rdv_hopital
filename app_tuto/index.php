<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="View/style/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="View/style/css/style.css"> 
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
     		 <li><a href="#" class="btn btn-info">ACCUEIL</a></li>
			<li><a href="View/Liste_rdv.php"class="btn btn-info">SECRETARIAT</a></li>
			<li><a href="View/Liste_admin.php"class="btn btn-info">ADMINISTRATEUR</a></li>
		   <li><a href="View/Liste_rdv.php"class="btn btn-info">MEDECIN</a></li>
      </li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> S'ENREGISTRER</a></li>
      <li><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-log-in"></span> S'IDENTIFIER</a></li>
    </ul>
  </div>
</nav>
<div class="example">
	<img src="img_log/imgfond2.jpg" class="img-fluid" alt="Chania" width="mx-auto" height="500" >
</div>


<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> se souvenir
    </label>

  </div>
  <div class="enregistrer">
  	  <button type="submit" class="btn btn-success">S'ENREGISTRER</button>
  </div>

</form>

</body>
</html>