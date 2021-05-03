<?php require ('Action.php');
	session_start();
	if (isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<title>Dashboard</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark p-2">
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

	<div class="container">
		<div class="container pt-5" align="right">
			<a href="Tambah.php" class="btn btn-primary mt-3">Tambah</a>
		</div>
		<table class="table table-hover mt-3" style="text-align: center;">
			<tr>
				<th>Semester</td>
				<th>Indeks Prestasi</td>
				<th colspan="2">Aksi</td>
			</tr>

			<?php 
				$query = $action->View();
				while ( $result = mysqli_fetch_array($query)) {
					echo "<tr>";
						echo "<td>".$result['Semester']."</td>";
						echo "<td>".$result['IndeksPrestasi']."</td>";
						echo "<td><a href='Ubah.php?Semester=$result[Semester]' class='btn btn-primary'>Ubah</a></td>";
						echo "<td><a href='Hapus.php?Semester=$result[Semester]' class='btn btn-danger'>Hapus</a></td>";
					echo "</tr>";
				}
			?>

		</table>
	</div>

</body>
</html>

<?php
	}else{
		echo "<script> alert ('Login terlebih dahulu')</script>;";
		echo "<script> location='Login.php'; </script>";
	}
?>