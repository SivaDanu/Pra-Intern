<?php
    session_start();
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
                background-image: url(tambahsiswa.png);
                background-size: 1500px;
            } 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
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
                    <h2>Tambah Siswa</h2>
                </div>
                <div class="modal-body">
                    <form action="simpansiswa.php">
                        <div class="form-group">
                            Pas Foto 3x3 : <br>
                            <input type="file" name="foto" id="" class="file">
                        </div>
                        <div class="form-group">
                            NISN :
                            <input type="text" name="nisn" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            Nama Siswa:
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            Jenis Kelamin :
                            <select name="jkel" id="" class="form-control">
                                <option value=""></option>
                                <option value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            Tanggal Lahir :
                            <input type="date" name="tgllhr" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            Jurusan Yang Dipilih :
                            <select name="jurusan" id="" class="form-control">
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
                            <input type="text" name="alamat" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            Nomor Telepon :
                            <input type="text" name="notelp" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            E-Mail :
                            <input type="text" name="email" id="" class="form-control">
                        </div>

                        <div class="modal-footer">
                            <a href="simpansiswa.php">
                                <button type="" class="btn btn-success">SIMPAN</button>       
                            </a>
                            <a href="">
                                <button type="reset" class="btn btn-danger">BATAL</button>
                            </form>
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