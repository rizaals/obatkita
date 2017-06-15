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
include_once("services/config.php");
include 'include/header.php';
include 'include/nav.php';
include 'services/getObatDetail.php'
?>
	<main>
		<div class="container">
			<div class="page-header">
				<h1>Detail Obat</h1>
			</div>
			<div class="table table-responsive">
				<table class="table">
					<tr>
						<td>ID Obat</td>
						<td>:</td>
						<td><?php echo $idobat ?></td>
					</tr>
					<tr>
						<td>Nama Obat</td>
						<td>:</td>
						<td><?php echo $namaobat; ?></td>
					</tr>
					<tr>
						<td>Stock</td>
						<td>:</td>
						<td><?php echo $qtyobat; ?></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td><?php echo $hrgobat; ?></td>
					</tr>
				</table>
				<a href="masterobat.php" class="btn btn-info flat">Kembali</a>
			</div>
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
});
</script>

</body>
</html>