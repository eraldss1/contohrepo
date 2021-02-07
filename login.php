<?php 
session_start();
require 'functions.php';



if ( isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' ");

    //cek kecocokan input username dengan di db
    if ( mysqli_num_rows($result) === 1 ){
        $row = mysqli_fetch_assoc($result);
        //cek kecocokan input password dengan password di db
        if ( password_verify($password,$row["password"]) ){
            $_SESSION['login'] = true;
            header("Location:beranda.php");
            exit;
        }
    }
    if ( isset($_SESSION['login'])){
        header("Location:beranda.php");
    }
    
    $error = true;
    if ( isset($error)){
        echo "<script>
            alert('username atau password salah!');
        </script>";
    }
}

if (isset($_POST['register'])){
    header('Location:registrasi.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="stylesheet" href="icon/fontawesome/css/all.min.css">
    <title>Laman Login</title>
    <style>
        body{
            background: url(css/img/pantai.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>

    <div class="login">

        <form action="" method="post">
            <div class="avatar">
                <i class="fa fa-user"></i>   
            </div>
            <h2>Login</h2>
            <div class="box-login">
                <i class="fa fa-user"></i>
                <input type="text" name="username" placeholder="Username" autocomplete="off">
            </div>
            <div class="box-login">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn-login">Login</button>
            <button type="submit" name="register" class="btn-login">Register</button>
        </form>

    </div>
</body>
</html>