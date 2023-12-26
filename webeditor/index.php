<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="icon" type="image/x-icon" href="../assets/img/Linggom AI-02.png">
    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
       <title>Web Editor Linggom</title>
</head>
<body>
<!--------------- Header --------------->
<header>
      <a href="#" class="logo" ><img src="../assets/img/Linggom AI-04.png" alt=""></a>
      <div class="bx bx-menu" id="menu-icon" ></div>
      <ul class="navbar">
        <li><a href="../">Home</a></li>
        <li><a href="#layanan">Linggom AI</a></li>
        <li class="span"><a href="logout.php" onclick="return confirm('logout?')">Logout</a></li>
      </ul>
    </header>
<!--------------- Body --------------->
<section id="Web Editor">
<div class="testimoni">
  <div class="inner">
    <h1>Yang mana yang mau kamu edit??</h1>
    <div class="rowtes">

      <div class="coltes">
        <div class="tess">
          <div class="name">Hero</div>
          <p>Dalam desain web, "hero" adalah bagian besar di bagian atas halaman beranda yang berisi gambar menarik, judul besar, dan pesan utama. Ini bertujuan untuk menarik perhatian pengunjung segera dan mengenalkan merek atau pesan utama situs web.</p>
          <a href="hero"><button>Edit Hero</button></a>
        </div>
      </div>

      <div class="coltes">
        <div class="tess">
          <div class="name">Testimoni</div>
          <p>Testimoni dalam website adalah komentar positif dari pelanggan atau pengguna sebelumnya yang membantu membangun kepercayaan dan meyakinkan pengunjung tentang kualitas produk atau layanan.</p>
          <a href="testimoni"><button>Edit Testimoni</button></a>
        </div>
      </div>

      <div class="coltes">
        <div class="tess">
          <div class="name">Pricing</div>
          <p>
"Pricing" dalam web adalah informasi tentang biaya yang terkait dengan produk atau layanan yang ditawarkan. Ini membantu pengunjung untuk mengetahui berapa harga yang harus dibayar dan apa yang mereka dapatkan dalam paket tersebut, membantu mereka membuat keputusan berdasarkan anggaran dan kebutuhan mereka.</p>
          <a href="pricing"><button>Edit Pricing</button></a>
        </div>
      </div>



      
    </div>
  </div>
</div>

</section>
</body>
</html>