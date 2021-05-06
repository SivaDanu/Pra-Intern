<?php
    session_start();
    if ($_SESSION['user'] == "")
        {
            header("location:login.php");
        }
?>

<html>
        Selamat Datang  <?php echo $_SESSION['user']; ?> ...!

        <p>
            <a href="logout.php">
                Kembali Ke Halaman Login...
            </a>
        </p>
</html>