<?php require ('Action.php'); 
	session_start();
	if (isset($_SESSION['user'])) {
		$semester=$_GET['Semester'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<title>Ubah</title>
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
	        <a class="nav-link" href="Dashboard.php">Dashboard</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="About.html">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="Logout.php">Logout</a>
	      </li>    
	    </ul>
	  </div>  
	</nav>

	<div class="container p-5">
	<h1>Ubah</h1>
		<form method="post" action="Action.php">
			<div class="form-group mb-2">
				<?php echo "<input type='text' name='semester' required='' value='$semester' class='form-control'>"?>
			</div>
			<div class="form-group mb-2">
				<input type="text" name="ip" required="" placeholder="Indeks Prestasi" class="form-control">
			</div>
			<div class="form-group mb-2">
				<input type="submit" name="Ubah" value="Ubah" class="btn btn-primary mb-2">
			</div>
		</form>
	</div>

</body>
</html>

<?php
	}else{
		echo "<script> alert ('Login terlebih dahulu')</script>;";
		echo "<script> location='Login.php'; </script>";
	}
?>