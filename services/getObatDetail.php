<?php
$link = mysqli_connect('localhost','root','');

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($koneksi, "SELECT * FROM obat WHERE obat_id = $id");

while($data = mysqli_fetch_array($result))
{
	$idobat = $data['obat_id'];
	$namaobat = $data['obat_nama'];
	$qtyobat  = $data['obat_qty'];
	$hrgobat  = $data['obat_harga'];
}
?>