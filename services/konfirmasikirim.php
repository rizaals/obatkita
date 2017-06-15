<?php
	include_once("./../services/config.php");
	if(!$_SESSION['user_nama']){
		header("Location: ./../login.php");
		die;
	}
?>

<html>
<head>
	<title>Aplikasi Master Barang Obat Kita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./../assets/img/icon.png">
	<link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./../assets/css/font-awesome.css">
	<link rel="stylesheet" href="./../assets/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="./../assets/css/style.css">
</head>

<body>
<?php

include './../include/headerlv2.php';
include './../include/navlv21.php';	

$link = mysqli_connect('localhost','root','');
?>
<div class="container">


<?php
$id = $_POST['idOrder'];

if(isset($_POST['submitPengiriman'])) {

	$id = $_POST['idOrder'];

	//insert data ke database
	$result = mysqli_query($koneksi, "UPDATE pengiriman SET kirim_status = '1' WHERE order_id = $id");	
	//tampilkan pesan berhasil
	echo '<i class="fa fa-check-circle fa-green fa-2"></i> Laporan Pengiriman Sukses ! <br>';
	echo "<br/><a href='./../transaksi/pengiriman.php' class='btn btn-success flat'>Lihat Hasilnya</a>";
} 
	
?>
</div>

<script src="./../assets/js/jquery.min.js"></script>
<script src="./../assets/js/jquery.dataTables.min.js"></script>
<script src="./../assets/js/javascript.js"></script>
</body>
</html>
