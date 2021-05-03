<?php
	$servername = "navi.mysql.database.azure.com";
	$username = "navi@navi";
	$password = "Decode00";
	$database = "nilai";

//	Koneksi  Database
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn) {
		die("Connection failed : ".mysqli_connect_error());
		echo "<br>";
	}else{
		mysqli_select_db($conn, $database);
	}
?>