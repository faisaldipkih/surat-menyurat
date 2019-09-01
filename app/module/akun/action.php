<?php

include_once "../../function/function.php";

$nama  = $_POST["nama"];
$username  = $_POST["username"];
$email  = $_POST["email"];
$whatsapp  = $_POST["whatsapp"];
$jabatan  = $_POST["jabatan"];

mysqli_query($koneksi, "INSERT INTO akun VALUES ('', '$nama', '$email', '$username', '$username', '$whatsapp', '$jabatan')");