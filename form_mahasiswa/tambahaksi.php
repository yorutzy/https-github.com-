<?php
include 'koneksi.php';

$kodemhs = $_POST['kodemhs'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO form_mahasiswa (kodemhs, nama, nisn, jurusan, alamat) 
                        VALUES ('$kodemhs', '$nama', '$nisn', '$jurusan', '$alamat')");

header("location:index.php");
?>