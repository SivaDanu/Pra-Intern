<?php
    include "database.php";
    $foto = $_REQUEST['foto'];
    $nisn = $_REQUEST['nisn'];
    $nama = $_REQUEST['nama'];
    $jkel = $_REQUEST['jkel'];
    $tgllhr = $_REQUEST['tgllhr'];
    $jurusan =$_REQUEST['jurusan'];
    $alamat = $_REQUEST['alamat'];
    $notelp = $_REQUEST['notelp'];
    $email = $_REQUEST['email'];

    mysqli_query($db, "UPDATE siswa SET foto = '$foto', 
                nama = '$nama', jkel = '$jkel', tgllhr = '$tgllhr', 
                jurusan = '$jurusan', alamat = '$alamat', 
                notelp = '$notelp', email = '$email' 
                WHERE nisn = '$nisn'");

    //if($edit)
    //{
        //echo 
            //"<script>
                //alert('Update Sukses');
                //document.location='editsiswa.php';
            //</script>";
    //}    
    //else
    //{
        //echo 
            //"<script>
                //alert('Update Gagal!');
                //document.location='editsiswa.php';
            //</script>";   
    //}

    header("location:dashboard.php");
?>