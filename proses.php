<?php
$penghubung = mysqli_connect("localhost", "root", "", "akademik_upg");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tlpn = $_POST["tlpn"];

    // Query SQL untuk menyimpan data
    $query = "INSERT INTO mahasiswa (nim, nama, alamat, tlpn) VALUES ('$nim', '$nama', '$alamat', '$tlpn')";

    if (mysqli_query($penghubung, $query)) {
        // Data berhasil disimpan, arahkan kembali ke halaman formulir
        header("Location: index.php");
        exit;
    } else {
        // Kesalahan saat menyimpan data
        echo "Terjadi kesalahan: " . mysqli_error($penghubung);
    }
}
?>