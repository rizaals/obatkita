<?php
	include_once("./../services/config.php");
	if(!$_SESSION['user_nama']){
		header("Location: ./../login.php");
		die;
	}
?>

<!DOCTYPE HTML>
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

$link = mysqli_connect('localhost','root','');

//mengambil id dari url
$id = $_GET['id'];

//memilih data sesuai dengan id yang di maksud
$result = mysqli_query($koneksi, "SELECT * FROM obat WHERE obat_id = $id");

while($data = mysqli_fetch_array($result))
{
	$idobat = $data['obat_id'];
	$namaobat = $data['obat_nama'];
	$qtyobat  = $data['obat_qty'];
	$hrgobat  = $data['obat_harga'];
}

?>

<?php
if(isset($_POST['submit'])) {
	$id = $_POST['idobat'];
	$qtyobat = $_POST['qtyobat'];
		
	// cek apakah ada data yang kosong	
	if(empty($qtyobat)) {

		include './../include/headerlv2.php';
		include './../include/navlv2.php';
		echo "<div class=\"container\"> <font color='red'>Quantity obat tidak boleh kosong.</font><br/>";

		//kembali ke halaman sebelumnya
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a> </div>";
	} else { 
		
		include './../include/headerlv2.php';
		include './../include/navlv2.php';

		// jika semua field tidak kosong maka 	
		//update data ke database
		$result = mysqli_query($koneksi, "UPDATE obat SET obat_qty = '$qtyobat' WHERE obat_id = $id ");

		//tampilkan pesan berhasil
		echo "<div class=\"container\"><i class=\"fa fa-check-circle fa-green fa-2\"></i> Data Berhasil Ditambahkan ! <br>";
		echo "<br/><a href='./../masterobat.php' class='btn btn-success flat'>Lihat Hasilnya</a></div>";
	}
}
?>

<script src="./../assets/js/jquery.min.js"></script>
<script src="./../assets/js/javascript.js"></script>
</body>
</html>
