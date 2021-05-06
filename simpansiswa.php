<?php
    include "database.php";

    $foto = $_REQUEST['foto'];
    $nisn = $_REQUEST['nisn'];
    $nama = $_REQUEST['nama'];
    $jkel = $_REQUEST['jkel'];
    $tgllhr = $_REQUEST['tgllhr'];
    $jurusan = $_REQUEST['jurusan'];
    $alamat = $_REQUEST['alamat'];
    $notelp = $_REQUEST['notelp'];
    $email = $_REQUEST['email'];

    mysqli_query($db, "INSERT INTO siswa VALUES('$foto', '$nisn', '$nama', '$jkel', '$tgllhr', '$jurusan', '$alamat', '$notelp', '$email')");

    header("location:dashboard.php");
?>