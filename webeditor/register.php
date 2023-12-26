<?php 
require 'functions.php';
if(isset($_POST["register"])){
    if(register($_POST) > 0 ){
        echo "<script>
        alert('Berhasil Tambah');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo mysqli_error($db);
    }
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
</head>
<body class="login">
<img src="../assets/img/Linggom AI-04.png" alt="">
    <form action="" method="post">
    <h3>Sign Up</h3>
    <div class="form-text">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <label for="password2">Konfirmasi Password</label>
            <input type="password" name="password2" id="password2">
        </div>
        <button type="submit" name="register">register!</button><br><br> 
        <p>Already have an acount?<a href="login.php">login here</a></p> 
    </form>
</body>
</html>