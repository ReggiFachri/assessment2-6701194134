<?php require ('Action.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<title>Registrasi</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <a class="navbar-brand" href="#">PABW</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="Registrasi.php">Registrasi</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="Login.php">Login</a>
	      </li>
	    </ul>
	  </div>  
	</nav>

	<div class="container p-5">
		<h1>Registrasi</h1>
		<form method="post" action="Action.php">
			<div class="form-group mb-2">
			<input type="email" name="mail" required="" placeholder="Email" class="form-control">
			</div>
			<div class="form-group mb-2">
			<input type="text" name="name" required="" placeholder="Nama Lengkap" class="form-control">
			</div>
			<div class="form-group mb-2">
			<input type="password" name="pass" required="" placeholder="Password" class="form-control">
			</div>
			<div class="form-group mb-2">
			<input type="password" name="repass" required="" placeholder="Konfirmasi Password" class="form-control">
			</div>
			<div class="form-group mb-2">
			<input type="submit" name="regis" value="Daftar" class="btn btn-primary p-2">
			</div>
		</form>
	</div>

</body>
</html>