<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA MAHASISWA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="tambah.php">+ TAMBAH DATA MAHASISWA</a>
<br/>
<br/>
<table border="1">
    <tr>
        <th>No</th>
        <th>kodemhs</th>
        <th>nama</th>
        <th>nisn</th>
        <th>jurusan</th>
        <th>alamat</th>
        <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM form_mahasiswa");
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['kodemhs']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['nisn']; ?></td>
        <td><?php echo $d['jurusan']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
            <a href="update.php?id=<?php echo $d['kodemhs']; ?>">UPDATE</a>
            <a href="delete.php?id=<?php echo $d['kodemhs']; ?>">DELETE</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
