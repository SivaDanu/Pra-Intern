<?php
    include "database.php";

    $nisn = $_REQUEST['nisn'];

    mysqli_query($db, "DELETE FROM siswa WHERE nisn = '$nisn'");

    header("location:dashboard.php");
?>