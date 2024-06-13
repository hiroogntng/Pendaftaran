<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Siswa Baru | SMA Al-azhar 1 Jakarta</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap')black;
      * {
        margin: 0;
        padding: 0;
      }

      .teks {
        font-family: "Caveat Brush", cursive;
        font-size: 2em;
        color: red;
      }

      .BrandLogo {
        color: black;
      }


      .hero {
        background-image: url('bgg.png');
        overflow: hidden;
        -webkit-mask-image: linear-gradient(
          rgb(255, 255, 255) 50%,
          rgba(255, 255, 255, 0)
        );
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        opacity: 0.8;
        width: 100%;
        height: 500px;
        z-index: 5;
      }
























































































































































































































































































































































































































































































































































































































































      

      .navbar{
        font-weight: 700;
      }

      .welcome {
        position: absolute;
      }
      .homeBrand{
        font-family: "Anton", sans-serif;
        font-size: 1em;
        color: purrle;
      }

      .main {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        height: 150px;
        color: white;
      }

      @media (max-width: 768px) {
        .hero {
          height: 200px; 
        }
        .gmbr1{
          height: 150px;
          width: 150px;
        }

        .gmbr2{
          height: 150px;
          width: 150px;
        }

        .gmbr3{
          height: 150px;
          width: 150px;
        }
      }


    </style>


  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top">
      <div class="container">
        <a class="teks navbar-brand " href="#">SMA Al-azhar <span class="BrandLogo">1 Jakarta</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link font-weight-bold homeBrand" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link homeBrand" aria-current="page" href="form-daftar.php" >Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link homeBrand" aria-current="page" href="https://smaia1.al-azhar.sch.id/">Profil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="carousel pt-5">
      <div class="hero d-flex align-items-center justify-content-center text-warning">
        <div class="row p-4 text-center position-absolute">
          <div class="col">
            <h1 class="fw-bold" id="teks"></h1>
          </div>
        </div>
        
        <!-- <h3 class="text-light">Selamat Datang di SMK JAYAPURA</h3><br>
          <div class="tombol d-flex justify-content-center">
            
            
            <button type="button" class="btn btn-primary m-4 ms-5 me-5"><a class="fst-none text-decoration-none text-light" href="list-siswa.php">Lihat pendaftar</a></button>
          </div> -->
      </div>
    </section>

    <section class="daftar">
      <div class="container">
         <div class="row">

          <div class="col-6 d-flex justify-content-end">
  
            <a class="btn btn bg-success text-white btn-center"
            href="form-daftar.php">Daftar
            Sekarang</a>
          </div>
          <div class="col-6 d-flex justify-content-start">
            <a class="btn btn bg-success text-white btn-center"
            href="list-siswa.php">Lihat pendaftar</a>
          </div>
          
        </div>
      </div>
    </section>





    <section class="container">
      <div class="row p-4 pt-5 pb-5 mt-5 mb-5 justify-content-center">
        <div class="gmbr1 col-md-3 p-3">
          <img src="dbl.png" class="w-100" alt="">
        </div>
        <div class="gmbr2 col-md-3 p-4 align-items-center">
          <img src="pp.png" class="w-100 align-items-center" alt="">
        </div>
        <div class="gmbr3 col-md-3 p-3">
          <img src="ppp-removebg-preview.png" class="w-100" alt="">
        </div>
      </div>
    </section>
    


    <footer class="bg-tertiary p-4 d-flex justify-content-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.8884994781253!2d106.79997868486653!3d-6.235234966993635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1415fe9ec0d%3A0x1fad0ccd6fcff08a!2sSMA%20Islam%20Al%20Azhar%201%20Jakarta!5e0!3m2!1sid!2sid!4v1717466217179!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>

   <section class="main bg-success text-dark">
      <h4>PENDAFTARAN DIMULAI PADA TANGAL 19 FEBRUARI 2025</h4>
    </section>







    <?php if(isset($_GET['status'])): ?>
    
      <?php
                if($_GET['status'] == 'sukses') {
                    echo "<script type='text/javascript'>alert('Pendaftaran Anda Berhasil');</script>";
                } else {
                   echo "<script type='text/javascript'>alert('Pendataran anda gagal!');</script>";
                }
            
            ?>
   
    <?php endif; ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
