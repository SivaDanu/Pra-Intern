<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body 
            {
                background-image: url(registration.jpg);
                background-size: 1550px;
            } 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Isi Untuk Registrasi</h2>
                </div>
                <div class="modal-body">
                    <form action="addaccount.php">
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
                        <button type="submit" class="btn btn-success">SUBMIT</button>
                        </form> <!-- YA BENAR, TEMPATNYA DISINI...:v -->
                    </div>
                    <div>
                        <a href="login.php">
                            <button>Back To Login Page</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>