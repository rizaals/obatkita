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

			<div class="produk">
				<div class="page-header">
					<h3>Index Barang</h3>
				</div>
				<div class="table table-responsive">
					<table id="MasterBarang" class="table text-center">
						<thead>
						<tr>
							<th>No</th>
							<th>ID Obat</th>
							<th>Nama Obat</th>
							<th>Stock</th>
							<th>Harga</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							<?php
								// mengambil data dari database
								$link = mysqli_connect('localhost','root','');
								$sql = 'SELECT * from obat ORDER BY obat_nama ASC';
								$hasil = mysqli_query($koneksi, $sql);
                                                                $i = 1;

								// Menampilkan data
								while ($data = $hasil->fetch_array()) {
									echo "<tr>";
									echo "<td>".$i++."</td>";
									echo "<td>".$data['obat_id']."</td>";
									echo "<td>".$data['obat_nama']."</td>";
									echo "<td>".$data['obat_qty']."</td>";
									echo "<td>".$data['obat_harga']."</td>";
									echo "<td>
											<a href=\"detailobat.php?id=$data[obat_id]\" class=\"btn btn-default flat\">Detail</a>
											<a href=\"transaksi/updatestockobat.php?id=$data[obat_id]\" class=\"btn btn-default btn-success flat\"><i class=\"fa fa-plus\"></i> Update</a>
										  </td>
										 ";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
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
            "order": [[ 2, "asc" ]]
	});

	$('ul.nav li').removeClass('active');
	$('ul.nav li#2').addClass('active');
});
</script>

</body>
</html>