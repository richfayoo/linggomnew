<?php

require 'webeditor/functions.php';
$hallo = query("SELECT * FROM hero");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"> 
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
    <!-- header -->
    <header>
      <a href="#" class="logo" ><img src="assets/img/Linggom AI-03.png" alt=""></a>
      <div class="bx bx-menu" id="menu-icon" ></div>
      <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#layanan">Linggom AI</a></li>
        <li><a href="webeditor">Web Editor</a></li>
      </ul>
    </header>
    
    <!-- home -->
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
          <img src="webeditor/gmbr/<?= $hr["img"]?>">
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


    <!-------------------- TESTIMONI --------------------->
    <section id="testimoni">
    <svg id="wave" class="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 110" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 211, 116, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,33L24,27.5C48,22,96,11,144,20.2C192,29,240,59,288,73.3C336,88,384,88,432,73.3C480,59,528,29,576,25.7C624,22,672,44,720,58.7C768,73,816,81,864,73.3C912,66,960,44,1008,45.8C1056,48,1104,73,1152,86.2C1200,99,1248,99,1296,84.3C1344,70,1392,40,1440,25.7C1488,11,1536,11,1584,18.3C1632,26,1680,40,1728,55C1776,70,1824,84,1872,75.2C1920,66,1968,33,2016,23.8C2064,15,2112,29,2160,33C2208,37,2256,29,2304,36.7C2352,44,2400,66,2448,66C2496,66,2544,44,2592,42.2C2640,40,2688,59,2736,71.5C2784,84,2832,92,2880,86.2C2928,81,2976,62,3024,62.3C3072,62,3120,81,3168,82.5C3216,84,3264,70,3312,62.3C3360,55,3408,55,3432,55L3456,55L3456,110L3432,110C3408,110,3360,110,3312,110C3264,110,3216,110,3168,110C3120,110,3072,110,3024,110C2976,110,2928,110,2880,110C2832,110,2784,110,2736,110C2688,110,2640,110,2592,110C2544,110,2496,110,2448,110C2400,110,2352,110,2304,110C2256,110,2208,110,2160,110C2112,110,2064,110,2016,110C1968,110,1920,110,1872,110C1824,110,1776,110,1728,110C1680,110,1632,110,1584,110C1536,110,1488,110,1440,110C1392,110,1344,110,1296,110C1248,110,1200,110,1152,110C1104,110,1056,110,1008,110C960,110,912,110,864,110C816,110,768,110,720,110C672,110,624,110,576,110C528,110,480,110,432,110C384,110,336,110,288,110C240,110,192,110,144,110C96,110,48,110,24,110L0,110Z"></path></svg>      <div class="testimoni">
        <div class="inner">
          <h1>What They Said??</h1>
          <div class="border"></div>
          <div class="rowtes">
            <div class="coltes">
              <div class="tess">
                <img src="assets/img/Rebranding-02.jpg" alt="">
                <div class="name">Rice From Heaven</div>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste delectus ipsam voluptatem aperiam adipisci. Quasi architecto aut aspernatur commodi doloremque minima possimus sunt beatae, amet consequuntur ratione. Ratione, optio velit?</p>
              </div>
            </div>

            <div class="coltes">
              <div class="tess">
                <img src="assets/img/Krasivo Full.png" alt="">
                <div class="name">Krasivo Studio</div>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste delectus ipsam voluptatem aperiam adipisci. Quasi architecto aut aspernatur commodi doloremque minima possimus sunt beatae, amet consequuntur ratione. Ratione, optio velit?</p>
              </div>
            </div>

            <div class="coltes">
              <div class="tess">
                <img src="assets/img/LOGO AMBULANCE DIAN only.png" alt="">
                <div class="name">jasaambulans.com</div>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste delectus ipsam voluptatem aperiam adipisci. Quasi architecto aut aspernatur commodi doloremque minima possimus sunt beatae, amet consequuntur ratione. Ratione, optio velit?</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
      <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 110" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 211, 116, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,33L17.1,27.5C34.3,22,69,11,103,20.2C137.1,29,171,59,206,73.3C240,88,274,88,309,73.3C342.9,59,377,29,411,25.7C445.7,22,480,44,514,58.7C548.6,73,583,81,617,73.3C651.4,66,686,44,720,45.8C754.3,48,789,73,823,86.2C857.1,99,891,99,926,84.3C960,70,994,40,1029,25.7C1062.9,11,1097,11,1131,18.3C1165.7,26,1200,40,1234,55C1268.6,70,1303,84,1337,75.2C1371.4,66,1406,33,1440,23.8C1474.3,15,1509,29,1543,33C1577.1,37,1611,29,1646,36.7C1680,44,1714,66,1749,66C1782.9,66,1817,44,1851,42.2C1885.7,40,1920,59,1954,71.5C1988.6,84,2023,92,2057,86.2C2091.4,81,2126,62,2160,62.3C2194.3,62,2229,81,2263,82.5C2297.1,84,2331,70,2366,62.3C2400,55,2434,55,2451,55L2468.6,55L2468.6,110L2451.4,110C2434.3,110,2400,110,2366,110C2331.4,110,2297,110,2263,110C2228.6,110,2194,110,2160,110C2125.7,110,2091,110,2057,110C2022.9,110,1989,110,1954,110C1920,110,1886,110,1851,110C1817.1,110,1783,110,1749,110C1714.3,110,1680,110,1646,110C1611.4,110,1577,110,1543,110C1508.6,110,1474,110,1440,110C1405.7,110,1371,110,1337,110C1302.9,110,1269,110,1234,110C1200,110,1166,110,1131,110C1097.1,110,1063,110,1029,110C994.3,110,960,110,926,110C891.4,110,857,110,823,110C788.6,110,754,110,720,110C685.7,110,651,110,617,110C582.9,110,549,110,514,110C480,110,446,110,411,110C377.1,110,343,110,309,110C274.3,110,240,110,206,110C171.4,110,137,110,103,110C68.6,110,34,110,17,110L0,110Z"></path></svg>    </section>
    <!-- pricing -->
    
    <section id="pricing">
      <div class="section-text">
        <div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1000">
     <h1>Choose Your Plan</h1>
    </div>
      </div>
      <div class="pricing">
        <!-- card Baby -->
        <div data-aos="fade-up"
     data-aos-duration="1000">
     <div class="card-wrapper">
       <!-- card header -->
       <div class="card-header">
         <h2>Baby</h2>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio praesentium, officia mollitia nemo voluptate quia obcaecati dicta soluta accusantium minus ad tempore quisquam commodi reprehenderit rem maxime voluptatem aliquid rerum!</p>
         <h1>IDR<span>50</span>Rb<sub>/month</sub></h1>
        </div>
        <!-- card detail -->
        <div class="card-detail">
          <p><span class="fas fa-check check"></span> <b>1</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>2</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem</p>
        </div>
        <!-- card pricing -->
        <div class="card-price">
        </div>
        <!-- button -->
        <br>
        <a href="#" class="btn">I WANT IT!!</a>
      </div>
    </div>


     <!-- card Baby -->
     <div data-aos="fade-up"
     data-aos-duration="1000">
     <div class="card-wrapper">
      
       <!-- card header -->
       <div class="card-header">
         <h2>Student</h2>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio praesentium, officia mollitia nemo voluptate quia obcaecati dicta soluta accusantium minus ad tempore quisquam commodi reprehenderit rem maxime voluptatem aliquid rerum!</p>
         <h1>IDR<span>199</span>Rb<sub>/month</sub></h1>
        </div>
        <!-- card detail -->
        <div class="card-detail">
          <p><span class="fas fa-check check"></span> <b>1</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>2</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-times nocheck"></span> Lorem banget dah</p>
          <p><span class="fas fa-times nocheck"></span> Lorem banget dah</p>
          <p><span class="fas fa-times nocheck"></span> Lorem banget dah</p>
        </div>
        <!-- card pricing -->
        <div class="card-price">
        </div>
        <!-- button -->
        <br>
        <a href="#" class="btn">I WANT IT!!</a>
      </div>
    </div>

     <!-- card Baby -->
     <div data-aos="fade-up"
     data-aos-duration="1000">
     <div class="card-wrapper">
       <!-- card header -->
       <div class="card-header">
         <h2>Professional</h2>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio praesentium, officia mollitia nemo voluptate quia obcaecati dicta soluta accusantium minus ad tempore quisquam commodi reprehenderit rem maxime voluptatem aliquid rerum!</p>
         <h1>IDR<span>499</span>Rb<sub>/month</sub></h1>
        </div>
        <!-- card detail -->
        <div class="card-detail">
          <p><span class="fas fa-check check"></span> <b>1</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>2</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
          <p><span class="fas fa-check check"></span> <b>6</b> lorem</p>
        </div>
        <!-- card pricing -->
        <div class="card-price">
        </div>
        <!-- button -->
        <br>
        <a href="#" class="btn">I WANT IT!!</a>
      </div>
    </div>


  </div>
  </section>
    
      <footer>
        <div class="row">
          <div class="col">
            <img src="assets/img/Linggom AI-03.png" class="logo" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores vitae pariatur mollitia harum, sunt doloremque exercitationem eos aliquam eveniet placeat ratione nesciunt aspernatur iusto nostrum nobis sint expedita temporibus atque.</p>
          </div>
          <div class="col">
            <h2>Location</h2>
            <p>Jalan Cendrawasih Raya Bintaro Jaya</p>       
            <p>Tangerang Selatan, Banten</p>
            <p>15413</p>      
            <p>Indonesia</p>
            <p class="email-id">admin@linggom.com</p>       
          </div>
          <div class="col">
            <h2>Links</h2>
            <a href=""><p>Pricing</p></a>  
            <a href=""><p>Linggom AI</p></a>  
            <a href=""><p>Web Editor</p></a>  
          </div>
          <div class="col">
            <h2>Newsletter</h2>
            <form action="">
              <i class="far fa-envelope" aria-hidden="true"></i>
              <input type="email" placeholder="Enter your email here" id="">
              <button type="submit"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
            </form>
            <div class="social-icons">
              <i class="fab fa-instagram" aria-hidden="true"></i>
              <i class="fab fa-facebook" aria-hidden="true"></i>
              <i class="fab fa-pinterest" aria-hidden="true"></i>
              <i class="fab fa-tiktok" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </footer>

               <!-- link to js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>