<?php
session_start();

if (isset($_POST['login'])) {
	require 'services/config.php';

	$username = $_POST['namauser'];
	$password = $_POST['password'];

	$result = mysqli_query($koneksi, 'SELECT * FROM users WHERE user_nama= "'. $username .'" AND user_pswd = "'. $password .'" ');

	if (mysqli_num_rows($result) == 1) {
		$_SESSION['user_nama'] = $username;
		header('Location: index.php');
	} else {
		echo "<script>alert('User Tidak Valid !');</script>";
	}
}

if(!empty($_POST["logout"])) {
	$_SESSION["user_nama"] = "";
	session_destroy();
	echo "<script>alert('Berhasil Logout !');</script>";
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Aplikasi Master Barang Obat Kita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/img/icon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div id="wrapper">
	<main>
		<div class="container">
			<div id="welcome" style="margin-top:40px;">
				<div class="row text-center">
					<div class="col-sm-12">
						<img src="assets/img/logo.png">	
					</div>
					<div class="col-sm-12">
						<h3>Selamat Datang di Aplikasi Master Barang Obat Kita</h3>
						<p>Aplikasi master barang Obat Kita adalah aplikasi backend berbasis web milik Obat Kita yang digunakan untuk melihat arus barang masuk dan barang keluar, guna menjaga keseimbangan stock barang dan akurasi perhitungan pendapatan.</p>
					</div>
				</div>
			</div> <br><br>
			<form class="form-login" method="post">
				<h2 class="form-signin-heading text-center">Silahkan Login</h2>
				<div class="form-group">
					<label class="control-label">Nama User :</label>
					<input type="text" class="form-control flat" placeholder="namauser" name="namauser" required autofocus>
				</div>
				<div class="form-group">
					<label class="control-label">Password :</label>
					<input type="password" class="form-control flat" placeholder="Password" name="password" required>
				</div>
				<button type="submit" name="login" class="btn btn-lg btn-warning btn-block flat">Sign in</button>
			</form>
		</div>
	</main>
	</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/javascript.js"></script>

<script>
$(document).ready(function(){
	$('ul.nav li').removeClass('active');
});
</script>
</body>
</html>