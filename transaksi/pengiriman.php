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
				<div class="page-header">
					<h1>Orderan Belum Dikirim</h1>
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
										WHERE orders.order_StatBayar = 1 AND pengiriman.kirim_status = 0';
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
											<a href=\"detailkirim.php?id=$data[order_id]\" class=\"btn btn-default flat\">Konfirmasi</a>
										</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
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
	$('#BelumBayar').DataTable({
            "order": [[ 1, "desc" ]]
	});

	$('ul.nav li').removeClass('active');
	$('ul.nav li#3').addClass('active');
	$('ul.nav li#35').addClass('active');
});
</script>
</body>
</html>