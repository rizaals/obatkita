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
if(isset($_POST['ProsesPesanan'])) {	
	$namaPemesan   = $_POST['namaPemesan'];
	$alamatPemesan = $_POST['alamatPemesan'];
	$namaBarang    = $_POST['namaBarang'];
	$jumlahBarang  = $_POST['jumlahBarang']; 
		
	if(empty($namaPemesan) || empty($alamatPemesan) || empty($namaBarang) || empty($jumlahBarang)) {

		if(empty($namaPemesan)) {
			echo "<div class=\"container\"><font color='red'>Nama Pemesan tidak boleh kosong.</font><br/></container>";
		}
		if(empty($alamatPemesan)) {
			echo "<div class=\"container\"><font color='red'>Alamat Pemesan tidak boleh kosong.</font><br/></container>";
		}
		if(empty($jumlahBarang)) {
			echo "<div class=\"container\"><font color='red'>Jumlah Barang tidak boleh kosong.</font><br/></container>";
		}

		//kembali ke halaman sebelumnya
		echo "<br/><a href='javascript:self.history.back();'>kembali</a>";

	} else {
		// jika semua field tidak kosong maka 
			
		//insert data ke database
		$result2 = mysqli_query($koneksi, "INSERT INTO customer(cus_nama,cus_alamat) VALUES('$namaPemesan','$alamatPemesan')");
		$result = mysqli_query($koneksi, "INSERT INTO 
											orders(order_StatBayar, order_tanggal, order_qty, cus_id, obat_id) 
											VALUES(	'0',
													( SELECT NOW() ),
													'$jumlahBarang',
													(SELECT cus_id FROM customer WHERE cus_id = LAST_INSERT_ID()),
													(SELECT obat_id FROM obat WHERE obat_nama ='$namaBarang' ) 
											)"
								);
		$result3 = mysqli_query($koneksi,"INSERT INTO 
											pengiriman(kirim_status,order_id) 
											VALUES('0',
											(SELECT order_id FROM orders WHERE order_id = LAST_INSERT_ID())
											)"
								);

		//tampilkan pesan berhasil
		echo '<i class="fa fa-check-circle fa-green fa-2"></i> Pesanan Berhasil Ditambahkan ! <br>';
		echo "<br/><a href='./../transaksi/daftarpesanan.php' class='btn btn-success flat'>Lihat Hasilnya</a>";
	}
}
?>
</div>

<script src="./../assets/js/jquery.min.js"></script>
<script src="./../assets/js/jquery.dataTables.min.js"></script>
<script src="./../assets/js/javascript.js"></script>
</body>
</html>
