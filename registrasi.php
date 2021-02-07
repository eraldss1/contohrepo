<?php 
require 'functions.php';

if ( isset($_POST['register'])){
    if ( registrasi($_POST) > 0 ){
        echo "<script>
            alert('Data berhasil ditambahkan!');
            location='login.php';
        </script>";
    }
    else{
        mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="icon/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/login-style.css">
    <style>
        body{
            background: url(css/img/pantai2.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
    </style>
</head>
<body>
    <form action="" method="post">
    <div class="register">
        <h2>Registrasi</h2>
        <div class="box-register">
            <label for="name">Nama</label>
            <input type="text" placeholder="Nama Lengkap" name="nama" autocomplete="off" required>
        </div>
        <div class="box-register">
            <label for="username">Username </label>
            <input type="text" placeholder="Username" name="username" autocomplete="off" required>
        </div>
        <div class="box-register">
            <label for="email">Email </label>
            <input type="text" placeholder="Your Email" name="email" autocomplete="off" required>
        </div>
        <div class="box-register">
            <label for="password">Password</label>
            <input type="password" placeholder="New Password" name="password" required>
        </div>
        <div class="box-register">
            <label for="password2">Konfirmasi <br> Password</label>
            <input type="password" placeholder="Confirm Password" name="password2" required>
        </div>
        <button type="submit" name="register" class="btn-login">Register</button><br><br>
        <a href="login.php">Login</a>
        
</body>
</html>