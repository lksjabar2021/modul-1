<?php
  /*
   * Source code by:
   * @author Developer Team at PT Infinys System Indonesia
   * @link https://infinyscloud.com
   * @link https://cloudkilat.com
   */
  require "./configuration/configuration.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>SMK Cloud Provider - Bisa berinovasi dengan teknologi masa depan komputasi awan!</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <div class="container">
      <!-- navigation section -->
      <div class="my-header my-primary">
        <nav class="navbar navbar-expand-sm navbar-dark">
          <a class="navbar-brand font-weight-bolder" href="/"><i class="fas fa-cloud"></i> Cloud Engineer</a>
          <ul class="nav navbar-nav justify-content-end ml-auto">
            <li class="nav-item">
            <a class="btn text-light font-weight-bolder" href="<?php echo $portal_link; ?>">
                <i class="fas fa-sign-in-alt text-light" style="font-size: 1.25rem;"></i> Login
              </a>
            </li>
          </ul>
        </nav>

        <!-- header section -->
        <div class="header">
          <div class="p-5"></div>
          <div class="p-4"></div>
          <div class="px-5">
            <h1 class="text-light display-4">SMK Cloud Provider</h1>
            <p class="text-light">
            Dengan SMK bersama-sama kita bisa berinovasi dan membangun teknologi masa depan menggunakan komputasi awan!
            </p>
            <p>
            <div class="py-3"></div>
            <a class="btn btn-light text-secondary" href="<?php echo $portal_link ?>">
              Coba Sekarang
            </a>
            </p>
          </div>
          <div class="p-5"></div>
          <div class="p-4"></div>
        </div>
      </div>

      <!-- feature section -->
      <div class="feature text-secondary px-5">
        <div class="p-5"></div>
        <div class="p-4"></div>
          
        <div class="title text-center">
          <h1 class="my-text-title">Keunggulan Komputasi Awan</h1>
          <p>
          <span><b><i>SMK Cloud Engineer</i></b></span> kami selalu menyediakan dan menawarkan
          keunggulan dan pengalaman komputasi awan yang terbaik bagi pelanggan
          </p>
        </div>

        <div class="p-4"></div> 

        <div class="row text-center">
          <div class="col-sm-6 p-5">
            <h2>
              <i class="fas fa-server my-text-primary icon"></i>
            </h2>
            <div class="py-2"></div>
            <p class="card-text">
              Kemampuan server yang cepat handal
            </p>
          </div>

          <div class="col-sm-6 p-5">
            <h2>
              <i class="fas fa-database my-text-primary icon"></i>
            </h2>
            <div class="py-2"></div>
            <p class="card-text">
              Penyimpanan data yang aman
            </p>
          </div>
        </div>

        <div class="p-1"></div>

        <div class="row text-center">
          <div class="col-sm-6 p-5">
            <h2>
              <i class="fas fa-laptop my-text-primary icon"></i>
            </h2>
            <div class="py-2"></div>
            <p class="card-text">
              Akses darimana saja dan kapanpun
            </p>
          </div>

          <div class="col-sm-6 p-5">
            <h2>
              <i class="far fa-file-code my-text-primary icon"></i>
            </h2>
            <div class="py-2"></div> 
            <p class="card-text">
              Memberikan kemudahan bagi pengembang perangkat lunak
            </p>
          </div>

          <div class="p-5"></div>
          <div class="p-4"></div>
          </div>
        </div>

        <!-- footer section -->
        <div class="footer my-primary text-light px-5">
          <div class="p-5"></div>
          <h2>Menjadi pelanggan <b>SMK Cloud Provider</b> sekarang juga!</h2> 
          <div class="py-3"></div>
          <p>
          <a class="btn btn-light text-secondary" href="<?php echo $portal_link ?>">
            Coba Sekarang
          </a>
          </p>
          <div class="p-5"></div>
        </div>
        <div class="my-copyright-bg px-5 py-3 text-light">
          <span>SMK Cloud Provider &copy; Copyright 2021</span>
        </div> 
    </div>
  </body>
</html>
