<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DATA MAHASISWA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
</br>
    <a href="index.php">KEMBALI</a>
</br>
</br>
<h3> TAMBAH DATA SISWA </h3>
<form method="post" action="tambahaksi.php">
    <form method="post" action="tambahaksi.php">
    <fieldset>
        <legend>Form Tambah Data Mahasiswa</legend>
        <table>
            <tr>
                <td>Kodemhs:</td>
                <td><input type="text" name="kodemhs"></td>
            </tr>
            <tr> 
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nisn:</td>
                <td><input type="number" name='nisn'></td>
            </tr> 
            <tr>
                <td>Jurusan:</td>
                <td><input type="text" name='jurusan'></td>
            </tr> 
            <tr>
                <td>Alamat:</td>
                <td><input type="text" name='alamat'></td>
            </tr> 
            <tr>
                <td></td>
                <td><input type='submit' value='SIMPAN'></td>
            </tr>
        </table>
    </fieldset>
</form>

</form>
</body>
</html>