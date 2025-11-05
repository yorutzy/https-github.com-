<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $nama = $_POST['namalengkap'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password, namalengkap) VALUES ('$username', '$password', '$nama')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Gagal mendaftar!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="POST">
            <fieldset>
                <legend>Form Registrasi</legend>
                <table>
                    <tr>
                        <td><label for="namalengkap">Nama Lengkap</label></td>
                        <td>:</td>
                        <td><input type="text" name="namalengkap" placeholder="Masukkan nama lengkap" required></td>
                    </tr>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td>:</td>
                        <td><input type="text" name="username" placeholder="Masukkan username" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>:</td>
                        <td><input type="password" name="password" placeholder="Masukkan password" required></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align:center; padding-top:10px;">
                            <button type="submit" name="register">Daftar</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <p class="redirect">
            Sudah punya akun? <a href="login.php">Login di sini</a>
        </p>
    </div>
</body>
</html>
