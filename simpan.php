<?php
include 'proses.php';

$nim = $_POST['nim'];
$nm_mhs = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['tlpn'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nim','$nm_mhs','$alamat','$tlpn')");


header("location:index.php");