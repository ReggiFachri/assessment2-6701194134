<?php 

class Action{

	var $servername = "navi.mysql.database.azure.com";
	var $username = "navi@navi";
	var $password = "Decode00";
	var $database = "nilai";

	function __construct(){
		$this->conn = mysqli_connect($this->servername, $this->username, $this->password);
		mysqli_select_db($this->conn, $this->database);
	}

	public function Registration(){

		$sql = "SELECT * FROM akun WHERE email = '$_POST[mail]'";
		$result = $this->conn->query($sql);
		$row = mysqli_num_rows($result);

		if ($row > 0) {
			echo "<script> alert ('Email yang anda masukkan sudah terdaftar, gunakan email yang lain'); </script>";
		}
		else{
			if (strcmp($_POST['pass'], $_POST['repass']) != 0) {
				echo "<script> alert ('Password belum cocok'); </script>";
			}
			else{
				$hash = password_hash($_POST['pass'], PASSWORD_DEFAULT); 
				$insert = "INSERT INTO akun (email, Nama, Password) VALUES ('$_POST[mail]', '$_POST[name]', '$hash')";
											
				if ($insert) {
					$hasil = $this->conn->query($insert);
					
					if ($hasil) {
						echo "<script> alert ('Registrasi berhasil'); </script>";
						echo "<script> location='Login.php'; </script>";
					}
					else{
						echo "<script> alert ('Registrasi Gagal'); </script>";
					}	
				}
			}
		}
		echo "<script> location='Registrasi.php'; </script>";
	}

	public function Login (){
		$sql = "SELECT * FROM akun WHERE email = '$_POST[mail]'";
		$result = $this->conn->query($sql);
		$row = mysqli_num_rows($result);
		
		if ($row > 0) {
			$user = mysqli_fetch_assoc($result);
			
			if (password_verify($_POST['pass'], $user['password'])) {
				session_start();
				$_SESSION['user']=$user['email'];
				echo "<script> alert ('Login berhasil')</script>;";
				echo "<script> location='Dashboard.php'; </script>";
			}
			else{
				echo "<script> alert ('Password salah')</script>;";
			}
		}
		else{
			echo "<script> alert ('Email belum terdaftar')</script>;";
		}
		echo "<script> location='Login.php'; </script>";
	}

	public function View (){ 
		$sql = "SELECT * FROM ip";
		return $this->conn->query($sql);
	}

	public function Add(){
		$sql = "INSERT INTO ip (Semester, IndeksPrestasi) VALUES ('$_POST[semester]', '$_POST[ip]')";
		$result = $this->conn->query($sql);
		if ($result) {
			echo "<script>alert ('Berhasil menambahkan Indeks Prestasi'); </script>";
		}
		else{
			echo "<script>alert ('Gagal'); </script>";
		}
		echo "<script> location='Dashboard.php' </script>";
	}

	public function Edit (){
		$sql = "UPDATE ip SET IndeksPrestasi = '$_POST[ip]' WHERE Semester = '$_POST[semester]' ";
		$result = $this->conn->query($sql);
		if($result){
			echo "<script> alert ('Berhasil diubah')</script>;";			
		}
		else{
			echo "<script> alert ('Gagal')</script>;";
		}
		echo "<script> location='Dashboard.php'; </script>";
	}

}

$action = new Action();

if (isset($_POST['regis'])) {
	$action->Registration();
}

if (isset($_POST['login'])) {
	$action->Login();
}

if (isset($_POST['Tambah'])) {
	$action->Add();
}

if (isset($_POST['Ubah'])) {
	$action->Edit();
}
?>