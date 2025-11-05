<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "datamahasiswa");
echo('KONEKSI DATABASE BERHASIL');

if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>