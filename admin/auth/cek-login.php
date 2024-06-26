<?php
session_start();

include_once('../../Koneksi/config.php');

$username = $_POST['username'];
$password = md5($_POST['password']); //password sudah dienkripsi


$login = mysqli_query($mysqli, "SELECT * FROM tbl_akun WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = "admin";

        header("location:../admin.php");
} else {
    header("location:login.php?pesan=gagal");
}
