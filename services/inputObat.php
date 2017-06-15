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
if(isset($_POST['submit'])) {	
	$namaobat =$_POST['namaobat'];
	$qtyobat = $_POST['qtyobat'];
	$hrgobat = $_POST['hrgobat'];
		
	// cek apakah ada data yang kosong
	if(empty($namaobat) || empty($qtyobat) || empty($hrgobat)) {
				
		if(empty($namaobat)) {
			echo "<font color='red'>Nama obat tidak boleh kosong.</font><br/>";
		}
		
		if(empty($qtyobat)) {
			echo "<font color='red'>Quantity obat tidak boleh kosong.</font><br/>";
		}
		
		if(empty($hrgobat)) {
			echo "<font color='red'>Harga obat tidak boleh kosong.</font><br/>";
		}
		
		//kembali ke halaman sebelumnya
		echo "<br/><a href='javascript:self.history.back();'>kembali</a>";
	} else { 
		// jika semua field tidak kosong maka 
			
		//insert data ke database
		$result = mysqli_query($koneksi, "INSERT INTO obat(obat_nama,obat_qty,obat_harga) VALUES('$namaobat','$qtyobat','$hrgobat')");
		
		//tampilkan pesan berhasil
		echo '<i class="fa fa-check-circle fa-green fa-2"></i> Data Berhasil Ditambahkan ! <br>';
		echo "<br/><a href='./../masterobat.php' class='btn btn-success flat'>Lihat Hasilnya</a>";
	}
}
?>
</div>

<script src="./../assets/js/jquery.min.js"></script>
<script src="./../assets/js/jquery.dataTables.min.js"></script>
<script src="./../assets/js/javascript.js"></script>
</body>
</html>
