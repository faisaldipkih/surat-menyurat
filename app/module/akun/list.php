<?php

$no = 1;
$query = query("SELECT * FROM akun");

if($url[0] == "akun"){
	$admin = mysqli_query($koneksi, "SELECT jabatan FROM akun WHERE jabatan='admin'");
	$numAdmin = mysqli_num_rows($admin);
	
	$kepala_dinas = mysqli_query($koneksi, "SELECT jabatan FROM akun WHERE jabatan='kepala_dinas'");
	$numKepala_dinas = mysqli_num_rows($kepala_dinas);

	$sekretaris_dinas = mysqli_query($koneksi, "SELECT jabatan FROM akun WHERE jabatan='sekretaris_dinas'");
	$numSekretaris_dinas = mysqli_num_rows($sekretaris_dinas);
}
	