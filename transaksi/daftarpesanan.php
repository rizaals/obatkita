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
	?>

	<main>
		<div class="container">
			<div class="bayar">
				<div class="tambahkan pull-right">
					<a href="inputpesanan.php" class="btn btn-sm btn-success flat"><i class="fa fa-plus"></i> Input Pesanan Baru</a><br><br>
				</div>
				<div class="page-header">
					<h3>Semua Pesanan</h3>
				</div>
				<div class="table table-responsive">
					<table id="SemuaPesanan" class="table text-center">
						<thead>
						<tr>
							<th>No</th>
							<th>Tanggal Order</th>
							<th>Order ID</th>
							<th>Nama Pemesan</th>
							<th>Alamat Kirim</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							<?php
								// mengambil data dari database
								$link = mysqli_connect('localhost','root','');
								$sql = 'SELECT * 
										FROM orders 
										INNER JOIN customer 
											ON orders.cus_id = customer.cus_id
										INNER JOIN obat
											ON orders.obat_id = obat.obat_id';
								$hasil = mysqli_query($koneksi, $sql);
								$i = 1;

								// Menampilkan data
								while ($data = $hasil->fetch_array()) {

									$harga = $data['obat_harga'];
									$qty = $data['order_qty'];
									$total = ($harga * $qty);

									echo "<tr>";
									echo "<td>".$i++."</td>";
									echo "<td>".$data['order_tanggal']."</td>";
									echo "<td>".$data['order_id']."</td>";
									echo "<td>".$data['cus_nama']."</td>";
									echo "<td>".$data['cus_alamat']."</td>";
									echo "<td>".$total."</td>";
									echo "<td>
											<a href=\"./../detailorder.php?id=$data[order_id]\" class=\"btn btn-default flat\">Detail</a>
										</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
				<a href="#" class="pull-right">lihat selengkapnya &raquo;</a>
			</div>

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
	$('#SemuaPesanan').DataTable({
           "order": [[ 2, "desc" ]]
	});

	$('ul.nav li').removeClass('active');
	$('ul.nav li#3').addClass('active');
	$('ul.nav li#33').addClass('active');
});
</script>
</body>
</html>