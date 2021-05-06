<?php
    session_start();
    error_reporting(error_reporting() & ~E_NOTICE);
    include "database.php";
    if ($_SESSION['user'] == "")
        {
            header("location:login.php");
        }
    $nisn = $_REQUEST['nisn'];
    $datasiswa = mysqli_query($db, "SELECT * FROM siswa WHERE nisn = '$nisn'");
    $isisiswa = mysqli_fetch_array($datasiswa)
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body 
            {
                background-image: url(editsiswa.jpg);
                background-size: 1500px;
            } 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Edit Biodata Siswa</h2>
                </div>
                <div class="modal-body">
                    <form action="updatesiswa.php">
                        <div class="form-group">
                            Pas Foto 3x3 : <br>
                            <input type="file" name="foto" id="" class="form-contro" value="<?php echo @$isisiswa[0]; ?>" required>
                        </div>
                        <div class="form-group">
                            NISN :
                            <input type="text" name="nisn" id="" class="form-control" value="<?php echo @$isisiswa[1]; ?>">
                        </div>
                        <div class="form-group">
                            Nama Siswa:
                            <input type="text" name="nama" id="" class="form-control" value="<?php echo @$isisiswa[2]; ?>">
                        </div>
                        <div class="form-group">
                            Jenis Kelamin :
                            <select name="jkel" id="" class="form-control" value="<?php echo @$isisiswa[3]; ?>" required>
                                <option value=""></option>
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            Tanggal Lahir :
                            <input type="date" name="tgllhr" id="" class="form-control" value="<?php echo @$isisiswa[4]; ?>">
                        </div>
                        <div class="form-group">
                            Jurusan Yang Dipilih :
                            <select name="jurusan" id="" class="form-control" value="<?php echo @$isisiswa[5]; ?>" required>
                                <option value=""></option>
                                <option value="APK">Administrasi Perkantoran</option>
                                <option value="AK">Akuntansi</option>
                                <option value="MM">Multimedia</option>
                                <option value="PM">Pemasaran</option>
                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                                <option value="TSM">Tehnik Sepeda Motor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            Alamat :
                            <input type="text" name="alamat" id="" class="form-control" value="<?php echo @$isisiswa[6]; ?>">
                        </div>
                        <div class="form-group">
                            Nomor Telepon :
                            <input type="text" name="notelp" id="" class="form-control" value="<?php echo @$isisiswa[7]; ?>">
                        </div>
                        <div class="form-group">
                            E-Mail :
                            <input type="text" name="email" id="" class="form-control" value="<?php echo @$isisiswa[8]; ?>">
                        </div>

                        <div class="modal-footer">
                            <a href="updatesiswa.php">
                                <button type="submit" class="btn btn-success">UPDATE</button>       
                            </form>
                            </a>
                            <a href="">
                                <button type="reset" class="btn btn-danger">BATAL</button>
                            </a>
                        </div>
                        <div class="modal-footer">
                            <a href="dashboard.php">
                                <button class="btn btn-info">KEMBALI KE DAFTAR SISWA</button>
                            </a>
                        </div>                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>