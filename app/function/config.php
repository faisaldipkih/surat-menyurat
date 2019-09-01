<?php
	define("BASE_URL", "http://localhost/surat-menyurat/");
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "surat_menyurat";

	$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");