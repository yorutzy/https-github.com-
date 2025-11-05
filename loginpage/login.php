<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['namalengkap'] = $user['namalengkap'];
        echo "<script>alert('Login berhasil!'); window.location='home.php';</script>";
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="POST">
            <fieldset>
                <legend>Form Login</legend>
                <table>
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
                            <button type="submit" name="login">Login</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <p class="redirect">
            Belum punya akun? <a href="register.php">Daftar di sini</a>
        </p>
    </div>
</body>
</html>
