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
include_once("./../services/inputPesanan.php");

if(isset($_POST['konfirmasiPesanan'])) {
		
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
?>
	<main>
		<div class="container">
			<div class="page-header">
				<h1>Konfirmasi Pesanan</h1>
			</div>
			<p>Anda akan melakukan input pesanan dengan detail sebagai berikut : </p>
			<form name="pesananBaru" id="pesananBaru" action="./../services/inputPesanan.php" method="post">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default flat"> <!-- data pemesan -->
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<b>Data Pemesan</b>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div class="form-group">
									<label class="control-label">Nama Pemesan :</label>
									<input type="text" class="form-control flat col-md-8" name="namaPemesan" value="<?php echo $namaPemesan ; ?>" readonly>
								</div> <br> <br>
								<div class="form-group">
									<label class="control-label">Alamat Pengiriman :</label>
									<textarea cols="30" rows="10" class="form-control flat" name="alamatPemesan" readonly><?php echo $alamatPemesan; ?></textarea>
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
											<input type="text" class="form-control flat" name="namaBarang" value="<?php echo $namaBarang ; ?>" readonly>
										</div>
									</div>
									<div class="col-md-2">
										<label class="control-label">Quantity</label>
										<div class="input-group">
											<input type="text" class="form-control text-center" id="jumlahBarang" name="jumlahBarang" value="<?php echo $jumlahBarang ; ?>" readonly>
										</div>
									</div>
									<div class="col-md-2">
										<?php
											// mengambil data dari database
											$link  = mysqli_connect('localhost','root','');
											$sql   = "SELECT obat_harga FROM obat WHERE obat_nama = '$namaBarang' ";
											$hasil = mysqli_query($koneksi, $sql);

											// Menampilkan data
											while ($data = mysqli_fetch_array($hasil)) {
												$harga = $data['obat_harga'];
										?>
											<div class="form-group">
												<label class="control-label">Harga Satuan :</label> <br>
												<span><?php echo $harga;?></span>
											</div>
										<?php
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="text-center">
						<h3><b>Total Bayar :</b> <?php echo ($harga * $jumlahBarang);?></h3><br>
						<a href="masterobat.php" class="btn btn-default flat">Kembali</a>
						<input type="submit" value="Proses Pesanan" name="ProsesPesanan" class="btn btn-info flat">
					</div>
				</div>
				
			</form>
<?php
	}
} else {
	echo "data tidak masuk";
}
?>
		</div>
	</main>
	</div>

	<footer>
		<div class="container">
			<p>Copyright <i class="fa fa-copyright"> S6J Mahasiswa Unindra, Kelompok 4 - 2017 | All Right Reserved</i></p>
		</div>
	</footer>

<script src="./../assets/js/jquery.min.js"></script>
<!-- <script src="./../assets/js/jquery.dataTables.min.js"></script> -->
<script src="./../assets/js/javascript.js"></script>

<script>
$(document).ready(function(){
	$('ul.nav li').removeClass('active');
	$('ul.nav li#3').addClass('active');
});
</script>

</body>
</html>