<?php
include 'koneksi.php';

$kodemhs  = $_POST['kodemhs'];
$nama     = $_POST['nama'];
$nisn     = $_POST['nisn'];
$jurusan  = $_POST['jurusan'];
$alamat   = $_POST['alamat'];

mysqli_query($koneksi, "update form_mahasiswa set
    nama='$nama', 
    nisn='$nisn',
    jurusan='$jurusan', 
    alamat='$alamat' 
    WHERE kodemhs='$kodemhs'");

// mengalihkan halaman kembali ke index.php
header("Location: index.php");
?>