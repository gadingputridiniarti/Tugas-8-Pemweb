<?php
session_start();
include 'koneksidb.php';

// cek apakah tombol login sudah diklik atau belum
if (isset($_POST['login'])) {
    // mengambil nilai inputan dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // membuat query untuk mencari user di database
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    // menghitung jumlah baris yang ddataukan
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location:F1_formregistrasi.php");
    } else {
        header("location:login.php?pesan=gagal ");

}
}
?>
