<?php 
	require ('DBConn.php');
	if (isset($_GET['Semester'])) {
		$semester = $_GET['Semester'];
		$sql 	= "DELETE FROM `ip` WHERE `ip`.`Semester` = '$semester'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "<script> alert ('Indeks Prestasi berhasil dihapus')</script>;";
		}else{
			echo "<script> alert ('Gagal')</script>;";
		}
		echo "<script> location='Dashboard.php'; </script>";
	}

 ?>