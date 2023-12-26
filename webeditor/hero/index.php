<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require '../functions.php';
$hallo = query("SELECT * FROM hero");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
    <link rel="icon" type="image/x-icon" href="assets/img/Linggom AI-02.png">
    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
    
    <title>Linggom - Tempat Teduh Kamu</title>
</head>
<body>
    <!----------------------- header ------------------------->
    <header>
      <a href="#" class="logo" ><img src="../../assets/img/Linggom AI-04.png" alt=""></a>
      <div class="bx bx-menu" id="menu-icon" ></div>
      <ul class="navbar">
          <li><a href="http://localhost/linggom/webeditor/hero/ubah.php?id=1">Edit</a></li>
        <li><a href="../">Home</a></li>
        <li><a href="#layanan">Linggom AI</a></li>
        <li class="span"><a href="logout.php" onclick="return confirm('logout?')">Logout</a></li>
      </ul>
    </header>
    <?php foreach( $hallo as $hr ):?> 
    <!-- home -->
    <section class="home" id="home">
      <div class="home-text">
        <div data-aos="fade-down-right">
          <h1><?= $hr["title"]?></h1>
          <div class="sec-text"><h1><span><?= $hr["spantitle"]?></span></h1></div>
          <p><?= $hr["descript"]?></p>
          <a href="<?= $hr["linkbutton"]?>" class="btn"><?= $hr["button"]?></a>
        </div>
      </div>
      <div class="home-img">
        <div data-aos="fade-up-left">
          <img src="../gmbr/<?= $hr["img"]?>">
        </div>
      </div>
    </section>
    <script>
      const text = document.querySelector(".sec-text span");

      const textload = () => {
        setTimeout(() => {
          text.textContent = "<?= $hr["spantitle"]?>";
        }, 0);
        setTimeout(() => {
          text.textContent = "<?= $hr["spantitle2"]?>";
        }, 4000);
        setTimeout(() => {
          text.textContent = "<?= $hr["spantitle3"]?>";
        }, 8000);
      }
      textload();
      setInterval(textload, 12000);
    </script>
 <?php endforeach;?>

               <!-- link to js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>