<?php
    include_once('../Koneksi/config.php');
    session_start();

    if ($_SESSION['role'] == '') {
        header("location:auth/login.php?pesan=gagal");
    } 

    $id = $_GET['id'];
 
    $info = $_GET['type'];

    $result = mysqli_query($mysqli, "DELETE FROM tbl_cluster WHERE id_cluster=$id");


    header("location:cluster-$info.php?pesan=berhasildel&type=$info");

?>
