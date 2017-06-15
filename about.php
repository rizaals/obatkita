<?php
	include_once("services/config.php");
	if(!$_SESSION['user_nama']){
		header("Location: login.php");
		die;
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
	
	<?php
		include 'include/header.php';
		include 'include/nav.php';
	?>
	<main>
		<div class="container">
			<div class="page-header">
				<h1>Tentang Obat Kita</h1>
			</div>
                        <p>Sistem transaksi obat kita merupakan sebuah aplikasi backend berbasis web dengan menggunakan bahasa HTML, CSS, PHP, MySql, dan Javascript.</p>
			<p>Obat Kita adalah sebuah percobaan sistem transaksi penjualan obat tidak real yang dibuat hanya untuk memenuhi tugas semester 6 kampus di Universitas Indraprsata PGRI, artinya sistem admin ini hanyalah sebuah ujicoba dari materi yang sudah kita pelajari di kampus.</p>
			<p>Adapun kami yang membuat beranggotakan 6 orang :
                        <ul class="faragraf">
	                    <li>Rizal Syahputra (NPM 2014 4350 1439)</li>
	                    <li>Yusuf Agpal (NPM 2014 4350 1398)</li>
	                    <li>Kurniawan (NPM 2014 4350 )</li>
	                    <li>Fikri Rahmania (NPM 2014 4350 )</li>
	                    <li>Budi Purnomo (NPM 2014 4350 1422)</li>
	                    <li>Ahmad Auzan Fahrul (NPM 2014 4350 )</li>
                        </ul>
                        </p>
		</div>
	</main>
	</div>

	<footer>
		<div class="container">
			<p>Copyright <i class="fa fa-copyright"> S6J Mahasiswa Unindra, Kelompok 4 - 2017 | All Right Reserved</i></p>
		</div>
	</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/javascript.js"></script>

<script>
$(document).ready(function(){
	$('#MasterBarang').DataTable({
	});

	$('ul.nav li').removeClass('active');
	$('ul.nav li#5').addClass('active');
});
</script>

</body>
</html>