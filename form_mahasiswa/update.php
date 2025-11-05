<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP KELAS XII5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>CRUD DATA SISWA SMA KRISTEN PETRA 1</h2>
    <a href="index.php">KEMBALI</a>
    <h3>EDIT DATA SISWA</h3>

<?php
include 'koneksi.php';
$kodemhs = $_GET['id']; 

$data = mysqli_query($koneksi, "SELECT * FROM form_mahasiswa WHERE kodemhs='$kodemhs'");
while($d = mysqli_fetch_array($data)){
?>
    <form method="post" action="ubah.php">
        <fieldset>
            <legend>Form Edit Data Mahasiswa</legend>
            <table>
                <tr>
                    <td>Kodemhs:</td>
                    <td>
                        <input type="hidden" name="kodemhs" value="<?php echo $d['kodemhs']; ?>">
                        <?php echo $d['kodemhs']; ?>
                    </td>
                </tr>
                <tr> 
                    <td>Nama:</td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>" required></td>
                </tr>
                <tr>
                    <td>NISN:</td>
                    <td><input type="number" name="nisn" value="<?php echo $d['nisn']; ?>" required></td>
                </tr> 
                <tr>
                    <td>Jurusan:</td>
                    <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>" required></td>
                </tr> 
                <tr>
                    <td>Alamat:</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
                </tr> 
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </fieldset>
    </form>
<?php
}
?>
</body>
</html>
