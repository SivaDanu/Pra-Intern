<?php
    //Mengaktifkan Session
    session_start();
    include "database.php";

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    //Verifikasi Data Login
    $datalogin = mysqli_query($db, "SELECT * FROM login WHERE user = '$user' AND pass = '$pass'");
    $verify = mysqli_num_rows($datalogin);

    //Jika Data Ditemukan
    if($verify>0) 
        {
            $isi = mysqli_fetch_array($datalogin);
            //Buat Variabel Session Untuk Menampung Nama User
            $_SESSION['user'] = $isi[0];
            header("location:dashboard.php");
        }
        //Jika Data Tidak Ditemukan
        else
        {
           header("location:loginerror.php");

        }
?>