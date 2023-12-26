<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require '../functions.php';
if(isset($_POST["submit"])){
    if( tambah($_POST) > 0 ){
        echo "<script>
        alert('Berhasil Tambah');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('Gagal Ditambahkan');
        </script>";
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h1>Tambah</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="title">title</label>
                <input type="text" name="title">
            </li>
            <li>
                <label for="spantitle">spantitle</label>
                <input type="text" name="spantitle">
            </li>
            <li>
                <label for="spantitle2">spantitle2</label>
                <input type="text" name="spantitle2">
            </li>
            <li>
                <label for="spantitle3">spantitle3</label>
                <input type="text" name="spantitle3">
            </li>
            <li>
                <label for="descript">descript</label>
                <textarea id="descript" name="descript" rows="4" cols="50" ></textarea>
            </li>
            <li>
                <label for="button">button</label>
                <input type="text" name="button">
            </li>
            <li>
                <label for="linkbutton">linkbutton</label>
                <textarea id="linkbutton" name="linkbutton" rows="4" cols="50"></textarea>
            </li>
            <li>
                <label for="img">Gambar</label>
                <input type="file" name="img" id="img" required>
            </li>
            <button type="submit" name="submit">submit</button>
        </ul>
    </form>
</body>
</html>