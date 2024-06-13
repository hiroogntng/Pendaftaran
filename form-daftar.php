<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMA Al-Azhar 1</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tiny5&display=swap" rel="stylesheet">

    <style>
      .BrandLogo {
        font-family: "Tiny5", sans-serif;
        color: white;
        font-size: 1em;

}
.homeBrand{
  font-family: "Spicy Rice", serif;
  font-size: 1em;
  color: #000;
 
}
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning navbar-light">
      <div class="container">
          <a class="navbar-brand" href="#"><span class="BrandLogo"> form Pendaftaraan <span class="homeBrand"> Siswa Baru</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
          </div>
      </div>
    </nav>

    <section id="form" class="pb-4">
    <br><br>
    <div class="container text-dark">
      
      <div class="row justify-content-center" data-aos="fade-up"  
      data-aos-duration="1300">
        <div class="col-md-6 pe-4 ps-4">
          <form action="proses-pendaftaran.php"
          method="POST" autocomplete = "off">
            <div class="mb-3"> 
              <label for="nama" class="form-label">Nama lengkap</label>
              <input name="nama" type="name" class="form-control" id="nama"
              aria-describedby="nama" required>
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control input" id="alamat" rows="3"
              style="box-shadow: 0px 0px 10px #ccc;" placeholder="" required></textarea>
            </div>
            <div class="mb-3">
              <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="flexRadioDefault1" required>
                <label class="form-check-label" for="flexRadioDefault1">
                    laki-laki
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault2" checked required>
                <label class="form-check-label" for="flexRadioDefault2">
                    perempuan
                </label>
                </div>
            </div>
            <div class="mb-3">
              <label for="agama" class="form-label" >Agama</label>
              <select class="form-select" aria-label="Default select example" name="agama" required>
                <option selected>pilih agamamu</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">katolik</option>
                <option value="Hindu">Hindhu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Atheis">Atheis</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="asal_sekolah" class="form-label">Asal sekolah</label>
              <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah"
              aria-describedby="asal_sekolah" required>
            </div>

            
            <div id="liveAlertPlaceholder"></div>
            <input class="btn btn-outline-primary" type="submit" value="Daftar" name="daftar" id="liveAlertBtn">
          </form>
        </div>
      </div>
    </div>
    <br>
  </section>





    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    
</body>
</html>