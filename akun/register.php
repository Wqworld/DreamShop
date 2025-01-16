<?php
include "../koneksi.php";
if (!$koneksi) {
    echo "tidak konek";
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kirim'])) {
        $username = $_POST['username'];
        $password = $_POST['pass1'];
        $role = "user";

        $SQLREGIST = "insert into akun values ('', '$username', '$password', '$role')";


        if (!mysqli_query($koneksi, $SQLREGIST)) {
            echo " ";
        } else {
            echo " ";
            header(header: "location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="../assets/styles/register.css" rel="stylesheet">
</head>

<body>
    <img src="../assets/images/Gambar_WhatsApp_2024-11-13_pukul_14.04.44_559c1128-removebg-preview.png" class="logo-dream-shop">
    <h1>Dreamshop</h1>
    <h1>Register</h1>
    <form method="post" action="#">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="input-usn" placeholder="Masukkan username anda" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="pass1" class="input-pw" placeholder="Masukkan password anda" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Konfirmasi Password</label>
            <input type="password" id="confirm-password" name="pass2" class="confirm-pw" placeholder="Konfirmasi password anda" required>
        </div>
        <div class="form-group">
            <input type="submit" name="kirim" class="submit" value="Lanjutkan">
        </div>
    </form>
</body>

</html>