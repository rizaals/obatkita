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
			<div id="welcome" class="jumbotron flat">
				<div class="row">
					<div class="col-sm-3">
						<img src="assets/img/logo.png">	
					</div>
					<div class="col-sm-9">
						<h3>Selamat Datang di Aplikasi Master Barang Obat Kita</h3>
						<p>Aplikasi master barang Obat Kita adalah aplikasi backend berbasis web milik Obat Kita yang digunakan untuk melihat arus barang masuk dan barang keluar, guna menjaga keseimbangan stock barang dan akurasi perhitungan pendapatan.</p>
					</div>
				</div>
				<div class="close">
					<i class="fa fa-close" onclick="$('#welcome').hide();"></i>
				</div>
			</div>

			<a href="transaksi/inputpesanan.php" class="btn btn-success btn-md flat"><i class="fa fa-plus"></i> Input Pesanan Baru</a>

			<div class="kirim">
				<div class="page-header">
					<h3>Orderan Belum Dikirim</h3>
				</div>
				<div class="table table-responsive">
					<table id="BelumBayar" class="table text-center">
						<thead>
						<tr>
							<th>No</th>
							<th>Order ID</th>
							<th>Tanggal Order</th>
							<th>Nama Pemesan</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							<?php
								// mengambil data dari database
								$link = mysqli_connect('localhost','root','');
								$sql = 'SELECT * 
										FROM pengiriman 
										INNER JOIN orders 
											ON pengiriman.order_id = orders.order_id
										INNER JOIN obat
											ON obat.obat_id = orders.obat_id
										INNER JOIN customer
											ON customer.cus_id = orders.cus_id
										WHERE orders.order_StatBayar = 1 AND pengiriman.kirim_status = 0 
                                                                                ORDER BY pengiriman.order_id DESC LIMIT 10';
								$hasil = mysqli_query($koneksi, $sql);
								$i = 1;

								// Menampilkan data
								while ($data = $hasil->fetch_array()) {

									$harga = $data['obat_harga'];
									$qty = $data['order_qty'];
									$total = ($harga * $qty);

									echo "<tr>";
									echo "<td>".$i++."</td>";
									echo "<td>".$data['order_id']."</td>";
									echo "<td>".$data['order_tanggal']."</td>";
									echo "<td>".$data['cus_nama']."</td>";
									echo "<td>".$total."</td>";
									echo "<td>
											<a href=\"transaksi/detailkirim.php?id=$data[order_id]\" class=\"btn btn-default flat\">Konfirmasi</a>
										</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
				<a href="transaksi/pengiriman.php" class="pull-right">lihat selengkapnya &raquo;</a>
			</div>

			<div class="bayar">
				<div class="page-header">
					<h3>Orderan Belum Dibayar</h3>
				</div>
				<div class="table table-responsive">
					<table id="BelumBayar" class="table text-center">
						<thead>
						<tr>
							<th>No</th>
							<th>Order ID</th>
							<th>Tanggal Order</th>
							<th>Nama Pemesan</th>
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
											ON orders.obat_id = obat.obat_id
										WHERE orders.order_StatBayar = 0 ORDER BY orders.order_id DESC LIMIT 10';
								$hasil = mysqli_query($koneksi, $sql);
								$i = 1;

								// Menampilkan data
								while ($data = $hasil->fetch_array()) {

									$harga = $data['obat_harga'];
									$qty = $data['order_qty'];
									$total = ($harga * $qty);

									echo "<tr>";
									echo "<td>".$i++."</td>";
									echo "<td>".$data['order_id']."</td>";
									echo "<td>".$data['order_tanggal']."</td>";
									echo "<td>".$data['cus_nama']."</td>";
									echo "<td>".$total."</td>";
									echo "<td>
											<a href=\"transaksi/detailbayar.php?id=$data[order_id]\" class=\"btn btn-default flat\">Konfirmasi</a>
										</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
				<a href="transaksi/pembayaran.php" class="pull-right">lihat selengkapnya &raquo;</a>
			</div>

			<div class="bayar">
				<div class="page-header">
					<h3>Semua Pesanan</h3>
				</div>
				<div class="table table-responsive">
					<table class="table text-center">
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
											ON orders.obat_id = obat.obat_id
										ORDER BY orders.order_id DESC LIMIT 10';
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
											<a href=\"detailorder.php?id=$data[order_id]\" class=\"btn btn-default flat\">Detail</a>
										</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
				<a href="transaksi/daftarpesanan.php" class="pull-right">lihat selengkapnya &raquo;</a>
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
	$('ul.nav li').removeClass('active');
	$('ul.nav li#1').addClass('active');
});
</script>
</body>
</html>