<?php

include("koneksi.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = $_POST['password'];
    if ($password == $password) {
        $sql = "SELECT * FROM tbl_akun WHERE username='$username'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tbl_akun (username, password)
                    VALUES ('$username', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi!</title>
</head>
<body>
    <center>
        <h1>Form Registrasi</h1>
        <br>
        <form action="" method="POST">
            <label for="username">Masukan Username</label>
            <input type="text" name="username" id="username">
            <br><br>
            <label for="password">Masukan Password</label>
            <input type="text" name="password" id="password">
            <br><br>
            <label for="cpassword">Konfirmasi Password</label>
            <input type="text" name="cpassword" id="cpassword">
            <br><br>
            <button type="submit" name="submit">Registrasi</button>
            <br><br>
            <a href="formlogin.php" type="button">Login Sekarang!</a>
        </form>
    </center>
</body>
</html>