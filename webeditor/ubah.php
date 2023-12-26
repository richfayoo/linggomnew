<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
//ambil data dari url
$id = $_GET["id"]; 
//query
$nds = query("SELECT * FROM needs WHERE id = $id")[0];

// //query data needs berdasarkan id
// $nds = query("SELECT * FROM needs WHERE id = $id");
// var_dump($_GET["$id"]);

//cek apakah berhasil diubah
if(isset($_POST["submit"])){
    if( ubah($_POST) > 0 ){
        echo "<script>
        alert('Berhasil Ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        img{
            width:300px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Update</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $nds["id"];?>">    
    <input type="hidden" name="gambarLama" value="<?= $nds["gambar"];?>">    
    <ul>
            <li>
                <label for="merk">Merk</label>
                <input type="text" name="merk" value="<?= $nds["merk"]?>">
            </li>
            <li>
                <label for="ns">No.Seri</label>
                <input type="text" name="ns" value="<?= $nds["ns"]?>">
            </li>
            <li>
                <label for="tipe">Tipe</label>
                <input type="text" name="tipe" value="<?= $nds["tipe"]?>">
            </li>
            <li>
                <label for="processor">Processor</label>
                <input type="text" name="processor" value="<?= $nds["processor"]?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <img src="../img/<?= $nds['gambar'] ?>" alt="">
                <input type="file" name="gambar" value="<?= $nds["gambar"]?>">
            </li>
            <button type="submit" name="submit">submit</button>
        </ul>
    </form>
</body>
</html>