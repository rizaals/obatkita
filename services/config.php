<?php

$host = "localhost";
$user = "root";
$password ="";
$db = "obatkitadb";

$koneksi = mysqli_connect($host,$user,$password,$db);

if (mysqli_connect_errno()) {
	echo "gagal".mysqli_connect_error;
}

error_reporting(0);
session_start();
?>