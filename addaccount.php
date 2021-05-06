<?php
    include "database.php";

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    mysqli_query($db, "INSERT INTO login VALUES ('$user', '$pass')");
    header("location:registration.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body 
            {
                background-image: url(addaccount.jpg);
                background-size: 1500px;
            } 
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account</title>
</head>
<body>
    
</body>
</html>