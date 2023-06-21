<?php
include('koneksi.php');
if(isset($_POST['submit'])){
    $password = $_POST['password'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_akun WHERE password='$password' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>
</head>
<body>
    <center>
        <h1>Form Login</h1>
        <form action="" method="POST">
            <div>
                <label for="password">Username</label>
                <input type="text" name="password" id="password">
            </div>
            <br>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <button type="submit" name="submit">Login</button>
            <br><br>

            <a href="formregistrasi.php">Registrasi</a>
        </form>
        </center>

</body>
</html>