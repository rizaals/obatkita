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
include './../services/config.php';
include './../include/headerlv2.php';
include './../include/navlv2.php';
?>

	<main>
		<div class="container">
			<div class="page-header">
				<h1>Input Obat Baru</h1>
			</div>
			<form action="./../services/inputObat.php" method="post" name="formInputObat">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label">Nama Obat :</label>
							<input type="text" class="form-control flat" name="namaobat">
						</div>	
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label class="control-label">Quantity Stock Masuk :</label>
							<input type="text" class="form-control flat" name="qtyobat">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label">Harga Obat :</label>
							<input type="text" class="form-control flat" name="hrgobat">
						</div>
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-info flat">Tambah</button>
			</form>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>Copyright <i class="fa fa-copyright"> S6J Mahasiswa Unindra, Kelompok 4 - 2017 | All Right Reserved</i></p>
		</div>
	</footer>
</div>

<script src="./../assets/js/jquery.min.js"></script>
<script src="./../assets/js/jquery.dataTables.min.js"></script>
<script src="./../assets/js/javascript.js"></script>

<script>
$(document).ready(function(){
	$('ul.nav li').removeClass('active');
	$('ul.nav li#3').addClass('active');
	$('ul.nav li#32').addClass('active');
});
</script>
</body>
</html>