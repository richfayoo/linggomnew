<?php
session_start();
require 'functions.php';

//cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
   $id = $_COOKIE['id'];
   $key = $_COOKIE['key'];
   
   //ambil cookie
   $result = mysqli_query($db, "SELECT username FROM user WHERE id = $id");
   $row = mysqli_fetch_assoc($result);
   //cek cookie and username
   if( $key === hash('sha256', $row['username'])){
    $_SESSION['login'] = true;
   }
}

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($db, "SELECT * FROM user WHERE 
    username = '$username'" );

    //cek username
    if( mysqli_num_rows($result) === 1 ){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            //set session
            $_SESSION["login"] = true;
            //rememberme
            if(isset($_POST['remember'])){
                // set cookie
                setcookie('id', $row['id'], time() + 3600);
                setcookie('key', hash('sha256', $row['username']), time() + 3600);
            }


            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
</head>
<body class="login">
    <img src="../assets/img/Linggom AI-04.png" alt="">
    <form action="" method="post">
        <h3>Login Here</h3>
        <?php if(isset($error)):?>
        <p style="color: red;">password/username tidak tersedia</p>
    <?php endif;?>
    <div class="form-text">
        <label for="username">Username</label>
        <input type="text"  name="username" placeholder="Ex: richfayoo" id="username">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Ex: ganteng34" id="password">
    </div>
        <label for="remember"><input type="checkbox" name="remember" id="remember"> Remember me</label>

        <button type="submit" name="login">Log In</button><br><br>
        <p>doesn't have an acount ? <a href="register.php">Sign Up here</a></p>
    </form>


    <!-- <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <button type="submit" name="login">login</button>

        </ul>
    </form>
    <a href="register.php"><button>signup</button></a> -->
</body>
</html>