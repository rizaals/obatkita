<?php
$link = mysqli_connect('localhost','root','');

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($koneksi, "SELECT * 
									FROM orders 
										INNER JOIN customer 
											ON orders.cus_id = customer.cus_id
										INNER JOIN obat
											ON orders.obat_id = obat.obat_id 
										WHERE orders.order_id = $id");

while($data = mysqli_fetch_array($result))
{
	$idOrder = $data['order_id'];
	$tglOrder = $data['order_tanggal'];
	$namaPemesan = $data['cus_nama'];
	$cus_alamat  = $data['cus_alamat'];
	$namaObat = $data['obat_nama'];
	$hrgobat  = $data['obat_harga'];
	$qtyPesanan = $data['order_qty'];

	
	$total = ($hrgobat * $qtyPesanan);
}
?>