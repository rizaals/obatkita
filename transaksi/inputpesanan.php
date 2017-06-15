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
		include_once("./../services/config.php");
		include './../include/headerlv2.php';
		include './../include/navlv2.php';
	?>

	<main>
		<div class="container">
			<div class="page-header">
				<h1>Input Pesanan Baru</h1>
			</div>

			<form name="pesananBaru" id="pesananBaru" action="konfirmasipesanan.php" method="post">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default flat"> <!-- data pemesan -->
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<b>Data Pemesan</b>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div class="form-group">
									<label class="control-label">Nama Pemesan :</label>
									<input type="text" class="form-control flat col-md-8" name="namaPemesan"> <!-- input name namaPemesan -->
								</div> <br> <br>
								<div class="form-group">
									<label class="control-label">Alamat Pengiriman :</label>
									<textarea id="" cols="30" rows="10" class="form-control flat" name="alamatPemesan"></textarea> <!-- input textarea name alamatPemesan -->
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default flat">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								<b>Barang yang dipesan</b>
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div id="panelBarang" class="panel-body">
								<div id="itemBarang1" class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Nama Barang :</label>
											<select name="namaBarang" id="namaBarang" class="form-control flat"> <!--select name namaBarang -->
												<?php
													// mengambil data dari database
													$link = mysqli_connect('localhost','root','');
													$sql = 'SELECT obat_nama FROM obat ORDER BY obat_nama ASC';
													$hasil = mysqli_query($koneksi, $sql);

													// Menampilkan data
													while ($data = $hasil->fetch_array()) {

														echo "<option>".$data['obat_nama']."</option>";
													}
												?>
											</select>
										</div>
									</div>
									<div class="col-md-2">
										<label class="control-label">Quantity</label>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-default flat" type="button" onclick="decrementValue()"><i class="fa fa-minus"></i></button>
											</span>
											<input type="text" class="form-control text-center" value="1" id="jumlahBarang" name="jumlahBarang">
											<span class="input-group-btn">
												<button class="btn btn-default flat" type="button" onclick="incrementValue()"><i class="fa fa-plus"></i></button>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br><br>
					<div class="total-harga pull-right">
						<input type="submit" value="Lanjut" class="form-control flat btn-info" name="konfirmasiPesanan">
					</div>
				</div>
			</form>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>Copyright <i class="fa fa-copyright"> S6J Mahasiswa Unindra, Kelompok 4 - 2017 | All Right Reserved</i></p>
		</div>
	</footer>
</div>

<script type="text/javascript" src="./../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="./../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="./../assets/js/javascript.js"></script>

<script>
$(document).ready(function(){
	$('ul.nav li').removeClass('active');
	$('ul.nav li#3').addClass('active');
	$('ul.nav li#31').addClass('active');
});
</script>
</body>
</html>