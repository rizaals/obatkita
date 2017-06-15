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

<div id="wrapper">
<?php
include './../include/headerlv2.php';
include './../include/navlv2.php';
include './../services/getObatOrder.php';
?>
	<main>
		<div class="container">
			<div class="page-header">
				<h1>Detail Pengiriman</h1>
			</div>
			<div class="table table-responsive">
				<table class="table">
					<tr>
						<td>ID Order</td>
						<td>:</td>
						<td><?php echo $idOrder ?></td>
					</tr>
					<tr>
						<td>Tanggal Pesan</td>
						<td>:</td>
						<td><?php echo $tglOrder; ?></td>
					</tr>
					<tr>
						<td>Nama Pemesan</td>
						<td>:</td>
						<td><?php echo $namaPemesan; ?></td>
					</tr>
					<tr>
						<td>Alamat Pemesan</td>
						<td>:</td>
						<td><?php echo $cus_alamat; ?></td>
					</tr>
					<tr>
						<td>Nama Obat</td>
						<td>:</td>
						<td><?php echo $namaObat; ?></td>
					</tr>
					<tr>
						<td>Jumlah Pesanan</td>
						<td>:</td>
						<td><?php echo $qtyPesanan; ?></td>
					</tr>
				</table>
				<form action="./../services/konfirmasikirim.php" class="text-center" method="post">
					<a href="pengiriman.php" class="btn btn-default flat">kembali</a>
					<input type="hidden" name="idOrder" id="idOrder" value="<?php echo $idOrder;?>">
					<input type="submit" value="Order Ini Sudah Dikirim" class="btn btn-info flat" name="submitPengiriman">
				</form>
			</div>
		</div>
	</main>
	</div>

	<footer>
		<div class="container">
			<p>Copyright <i class="fa fa-copyright"> S6J Mahasiswa Unindra, Kelompok 4 - 2017 | All Right Reserved</i></p>
		</div>
	</footer>

<script src="./../assets/js/jquery.min.js"></script>
<script src="./../assets/js/jquery.dataTables.min.js"></script>
<script src="./../assets/js/javascript.js"></script>

<script>
$(document).ready(function(){
	$('ul.nav li').removeClass('active');
});
</script>

</body>
</html>