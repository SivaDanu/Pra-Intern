<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body 
            {
                background-image: url(login.jpg);
                background-size: 1500px;
            } 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Isi Username Dan Password Untuk Login</h2>
                </div>
                <div class="modal-body">
                    <form action="verifypass.php">
                        <div class="form-group">
                            USERNAME :
                            <input type="text" name="user" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            PASSWORD :
                            <input type="text" name="pass" id="" class="form-control">
                        </div>
                    <!--</form> JANGAN SAMPAI SALAH, TEMPAT PENUTUP FORM BUKAN DISINI, MELAINKAN DIBAWAH FUNGSI BUTTON-->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">LOGIN</button>
                        </form> <!-- YA BENAR, TEMPATNYA DISINI...:v -->
                    </div>
                    <div>
                        <a href="registration.php">
                            <button>Dont Have Account..?</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<table align="center">
        <div class="container">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 align="center">DANONE</h1>
                        <div class="modal-body">
                        <h2>Silahkan Isi Bidang Dibawah...!</h2>
                            <form action="verifypass.php">
                                <div class="form-group">
                                    USERNAME :
                                    <input type="text" name="user" id="" class="form-control">
                                </div>
                                <div>
                                    PASSWORD :
                                    <input type="text" name="pass" id="" class="form-control">
                                </div>
                                <button type="submit">LOGIN</button>-->
                                <!--<tr>
                                    <th>USERNAME : </th>
                                    <th>
                                        <input type="text" name="user" id="">
                                    </th>
                                </tr>
                                <tr>
                                    <th>PASSWORD : </th>
                                    <th>
                                        <input type="text" name="pass" id="">
                                    </th>
                                    <button type="submit" class="btn btn-success">
                                            LOGIN
                                    </button>
                                </tr>-->
                                <!--Username : 
                                <input type="text" name="user" id="">
                                Password :
                                <input type="text" name="pass" id="">
                                <button type="submit" class="btn btn-success">LOGIN</button>-->
                                <!--</div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </table>-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="dist/sweetalert2.all.min.js"></script>
</body>
</html>