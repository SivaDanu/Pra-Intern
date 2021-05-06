<?php
    session_start();
    //session_destroy();
    include "database.php";
    if ($_SESSION['user'] == "")
        {
            header("location:login.php");
        }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body 
            {
                background-image: url(dashboard.jpeg);
                background-size: 1500px;
            } 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<p>
    <a href="logout.php">
        <button type="" class="btn btn-warning">
            LOGOUT
        </button>
    </a>
</p>
    <div class="container">
    <div class="align-center">
        <h1 class="text-center text-white">Daftar Pendaftaran Siswa</h1>
        <h4 class="text-center text-white">Danone</h4>
    </div>
        <table class="table table-bordered table-striped table-dark">
            <a href="tambahsiswa.php">
                <button type="" class="btn btn-info">TAMBAH SISWA</button>
            </a>
                <tr>
                    <th>Nomor Pendaftaran : </th>
                    <th>Pas Foto 3x3 : </th>
                    <th>NISN : </th>
                    <th>Nama Siswa : </th>
                    <th>Jenis Kelamin : </th>
                    <th>Tanggal Lahir : </th>
                    <th>Jurusan Yang Dipilih : </th>
                    <th>Alamat Rumah : </th>
                    <th>Nomor Telepon : </th>
                    <th>E-Mail : </th>
                    <th>Aksi</th>
                </tr>
                <?php
                    $nopen = 1;
                    $datasiswa = mysqli_query($db, "SELECT * FROM siswa");
                    while($isisiswa = mysqli_fetch_array($datasiswa))
                    {
                ?>
                <tr>
                    <td><?php echo $nopen++;?></td>
                    <td>
                        <img src="gambar/<?php echo $isisiswa[0]; ?>" alt="" style="width:100px; float: left; margin-bottom: 5px; ">
                    </td>
                    <td><?php echo $isisiswa[1];?></td>
                    <td><?php echo $isisiswa[2];?></td>
                    <td><?php echo $isisiswa[3];?></td>
                    <td><?php echo $isisiswa[4];?></td>
                    <td><?php echo $isisiswa[5];?></td>
                    <td><?php echo $isisiswa[6];?></td>
                    <td><?php echo $isisiswa[7];?></td>
                    <td><?php echo $isisiswa[8];?></td>
                    <td>
                        <a href="hapussiswa.php?nisn=<?php echo $isisiswa[1]; ?>">
                            <button type="" class="btn btn-danger">HAPUS</button>
                        </a>
                        <a href="editsiswa.php?nisn=<?php echo $isisiswa[1];  ?>">
                            <button type="" class="btn btn-warning">EDIT</button>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
                <!--<a href="jualbarang.php">
                    <button type="" class="btn btn-info">CHECKOUT DAGANGAN</button>
                </a>-->
        </table>
    
    
    </div>    
<script src="dist/sweetalert2.all.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>