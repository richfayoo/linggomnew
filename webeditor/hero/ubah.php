<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require '../functions.php';
//ambil data dari url
$id = $_GET["id"]; 
//query
$hr = query("SELECT * FROM hero WHERE id = $id")[0];

// //query data needs berdasarkan id
// $hr = query("SELECT * FROM needs WHERE id = $id");
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Update</title>
    <style>
        
       * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Raleway", sans-serif;
    scroll-behavior: smooth;
    list-style: none;
    text-decoration: none;
  }
        h1{
            padding-top: 50px;
            text-align: center;
        }
        img{
            width: 500px;
            height: auto;
        }
        ul{
            list-style: none;
            text-align: left;
            padding-left: 300px;
        }
        input{
            border-style: none;
            border-radius: 200px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(255, 122, 50, 0.6);
        }
        textarea{
            border-style: none;
            border-radius: 100px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(255, 122, 50, 0.6);
        }
        button{
            box-shadow: 0 0 10px #000;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Update</h1> <br>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $hr["id"];?>">    
    <input type="hidden" name="gambarLama" value="<?= $nds["img"];?>">    
    <ul>
            <li>
                <label for="title">Title</label>
                <input type="text" name="title" value="<?= $hr["title"]?>"> <br><br>
            </li>
            <li>
                <label for="spantitle">Span Title</label>
                <input type="text" name="spantitle" value="<?= $hr["spantitle"]?>"><br><br>
            </li>
            <li>
                <label for="spantitle2">Span Title2</label>
                <input type="text" name="spantitle2" value="<?= $hr["spantitle2"]?>"><br><br>
            </li>
            <li>
                <label for="spantitle3">Span Title3</label>
                <input type="text" name="spantitle3" value="<?= $hr["spantitle3"]?>"><br><br>
            </li>
            <li>
                <label for="descript">Description</label>
                <textarea id="descript" name="descript" rows="4" cols="50" value=""><?= $hr["descript"]?></textarea><br><br><br>
            </li>
            <li>
                <label for="button">Button</label>
                <input type="text" name="button" value="<?= $hr["button"]?>"><br><br><br>
            </li>
            <li>
                <label for="linkbutton">Link Button</label>
                <textarea id="linkbutton" name="linkbutton" rows="4" cols="50" value=""><?= $hr["linkbutton"]?></textarea><br><br><br>
            </li>
            <li>
                <label for="img">Gambar</label>
                <img src="../gmbr/<?= $hr['img']?>" alt="">
                <input type="file" name="img" value="<?= $hr["img"]?>">
                <button type="submit" name="submit">submit</button>
            </li>
            
        </ul>  
    </form>
</body>
</html>