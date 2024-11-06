<?php
// Mulai sesi
session_start();

if (isset($_SESSION['logout_message'])) {
    // Tampilkan pesan alert
    echo '<div class="alert alert-success" role="alert">' . $_SESSION['logout_message'] . '</div>';
    // Hapus pesan logout setelah ditampilkan
    unset($_SESSION['logout_message']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Heritage.co</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- hero -->
  <div class="hero">
    <ul class="dynamic-text">
      <li><span>Hello! Welcome in</span></li>
      <li><span>Selamat Datang di</span></li>
      <li><span>Sugeng Rawuh ing</span></li>
    </ul>
    <div class="text">Heritage.co</div>
  </div>
  <!-- navbar -->
  <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#">Heritage.co</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Brand</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="#service">Service</a>
            <a class="nav-link" href="#testi">Testi</a>
            <a class="nav-link" href="#partner">Partner</a>
            <?php
            if (isset($_SESSION['username'])) {
              // Jika sudah login, tampilkan tombol logout
              echo '<a class="nav-link" href="get.php">Booking</a>';
              echo '<a class="nav-link" href="logout.php?logout=1">Logout</a>';
            } else {
              // Jika belum login, tampilkan tombol login
              echo '<a class="nav-link" href="login.php">Login</a>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <!-- about -->
  <div class="container about" id="about">
    <div class="container">
      <h1>About us</h1>
      <p>Selamat datang di <span class="highlight">Heritage.co</span>, destinasi terpercaya untuk pakaian adat yang elegan dan berkualitas tinggi.
        <br>Kami mempersembahkan warisan budaya Jawa melalui koleksi kami yang eksklusif. </br>
      </p>
      <p>Di <span class="highlight">Heritage.co</span>, kami menghargai keindahan dan kekayaan tradisi Jawa. Kami percaya bahwa setiap pakaian adat adalah cerminan dari nilai-nilai luhur dan keindahan yang telah diwariskan dari generasi ke generasi.</p>
      <p>Menghadirkan kemewahan warisan Jawa dalam setiap lipatan kain, kami adalah penyambung generasi melalui pakaian tradisional</p>
    </div>
    <img src="img/tamansari.jpg" alt="">
  </div>

  <!-- service -->
  <div class="service" id="service">
    <h4><b>Our Service</b></h4>
    <div class="colom" id="colom">
      <div class="row align-items-start">
        <div class="col" id="colom1">
          <div class="image-container">
            <img src="img/1.jpeg" alt="Prewedding" style="height: 320px; border-radius: 16%;">
          </div>
          <h5 style="margin-top: 16px;"><b>Prewedding Photography</b></h5>
          <div class="text-container">
            <p>Abadikan momen indah Anda dengan layanan lengkap kami yang dirancang khusus untuk memenuhi semua
              kebutuhan dokumentasi Anda. Kami berkomitmen untuk mengabadikan setiap momen berharga Anda dengan
              sempurna.</p>
            <ul>
              <li>Online Galeri pribadi untuk berbagi foto.</li>
              <li>Fotografi dan Video Dokumentasi Acara yang profesional.</li>
              <li>Layanan pengeditan video berkualitas tinggi.</li>
              <li>Konsultasi konsep foto yang personal untuk momen sempurna.</li>
            </ul>
            <p><b>Start from:</b> Rp. 800.000</p>
          </div>
        </div>
        <div class="col" id="colom2">
          <div class="image-container">
            <img src="img/2.png" alt="Fashion" style="height: 320px; border-radius: 16%;">
          </div>
          <h5 style="margin-top: 16px;"><b>Fashion Styling</b></h5>
          <div class="text-container">
            <p>
              Temukan gaya unik Anda dengan layanan fashion styling kami. Tim ahli kami akan membantu Anda menemukan
              pakaian dan aksesori yang cocok untuk setiap kesempatan, dari penampilan kasual sehari-hari hingga gaya
              glamor.
            </p>
            <ul>
              <li>Pemilihan pakaian yang sesuai gaya pribadi Anda.</li>
              <li>Saran tentang aksesori yang melengkapi tampilan Anda.</li>
              <li>Konsultasi gaya rambut dan make-up untuk setiap acara.</li>
              <li>Sesi styling personal dengan stylist profesional.</li>
            </ul>
            <p><b>Start from:</b> Rp. 350.000</p>
          </div>

        </div>
        <div class="col" id="colom3">
          <div class="image-container">
            <img src="img/3.png" alt="Photo Planner" style="height: 320px; border-radius: 16%;">
          </div>
          <h5 style="margin-top: 16px;"><b>Photo Planner</b></h5>
          <div class="text-container">
            <p>
              Rencanakan setiap detail pemotretan Anda dengan layanan Photo Planner kami. Tim kami akan bekerja sama
              dengan Anda untuk merencanakan lokasi yang sempurna, gaya foto yang sesuai, serta tema dan konsep yang
              unik.
            </p>
            <ul>
              <li>Pemilihan lokasi pemotretan yang ideal sesuai tema.</li>
              <li>Penentuan gaya foto yang mencerminkan kepribadian Anda.</li>
              <li>Pengembangan tema dan konsep foto yang unik.</li>
              <li>Penjadwalan sesi pemotretan yang efisien.</li>
            </ul>
            <p><b>Start from:</b> Rp. 500.000</p>
          </div>
        </div>
        <div class="more-info">
          <a href="#">More Info</a>
        </div>
      </div>
    </div>
  </div>

  <!-- package -->
  <div class="service" id="package">
    <h4><b>Our Package</b></h4>
    <div class="colom" id="colom">
      <div class="row align-items-start">
        <div class="col" id="colom1">
          <div class="image-container">
            <img src="img/prewed_package.jpeg" alt="Prewedding" style="height: 320px; border-radius: 16%;">
          </div>
          <h5 style="margin-top: 16px;">
            <b>
              Paket 1 <br>
              Prewedding Photography Package
            </b>
          </h5>
          <div class="text-container">
            <ul>
              <li>Fotografi selama 8 jam.</li>
              <li>200 foto digital dengan retouching.</li>
              <li>Online Galeri pribadi untuk berbagi foto.</li>
              <li>Layanan pengeditan video highlight dan dokumentasi acara.</li>
              <li>Konsultasi konsep foto yang personal.</li>
            </ul>
            <p><b> Rp. 1.950.000</b></p>
          </div>
        </div>
        <div class="col" id="colom2">
          <div class="image-container">
            <img src="img/fashion_package.jpeg" alt="Fashion" style="height: 320px; border-radius: 16%;">
          </div>
          <h5 style="margin-top: 16px;">
            <b>
              Paket 2 <br>
              Fashion Styling Package
            </b>
          </h5>
          <div class="text-container">
            <ul>
              <li>Sesi styling personal selama 4 jam.</li>
              <li>Pemilihan pakaian dan aksesori eksklusif untuk berbagai acara.</li>
              <li>Konsultasi gaya rambut, make-up, dan manicure.</li>
            </ul>
            <p><b> Rp. 1.300.000</b></p>
          </div>

        </div>
        <div class="col" id="colom3">
          <div class="image-container">
            <img src="img/photoplanner_package.jpeg" alt="Photo Planner" style="height: 320px; border-radius: 16%;">
          </div>
          <h5 style="margin-top: 16px;">
            <b>
              Paket 3 <br>
              Photo Planner Package
            </b>
          </h5>
          <div class="text-container">
            <ul>
              <li>Konsultasi mendalam dengan tim kreatif untuk merencanakan setiap detail pemotretan.</li>
              <li>Pengembangan konsep foto yang unik dan penuh gaya.</li>
              <li>Pemilihan lokasi eksklusif dan aksesori.</li>
              <li>Penjadwalan, koordinasi, dan pengawasan penuh terhadap semua aspek sesi pemotretan.</li>
            </ul>
            <p><b> Rp. 1.600.000</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- testi -->
  <div class=" testi" id="testi">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>testi 1</h5>
            <p>
              Prewedding Photography mereka sungguh luar biasa! Mereka tidak hanya mengabadikan momen indah kami dengan
              sempurna, tetapi juga memberikan pengalaman yang menyenangkan dan santai selama sesi foto.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slide2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>testi 2</h5>
            <p>
              Fashion Styling mereka benar-benar membantu saya menemukan gaya unik saya. Dengan saran yang penuh gaya,
              saya merasa percaya diri dan memesona dalam setiap kesempatan.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slide3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>testi 3</h5>
            <p>
              Layanan Photo Planner mereka sungguh profesional dan penuh perhatian terhadap detail. Mereka tidak hanya
              membantu saya merencanakan setiap sesi pemotretan, tetapi juga menciptakan konsep yang menakjubkan untuk
              mengabadikan momen spesial saya.
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- partner -->
  <div class="service" id="partner">
    <h4><b>Our Partner</b></h4>
    <div class="colom" id="colom">
      <div class="row align-items-start">
        <div class="col" id="colom1">
          <div class="image-container">
            <img src="img/foto.jpg" alt="JasaFoto" height="320px" style="border-radius: 16%;" />
          </div>
          <div class="text-container" style="margin-top: 16px;">
            <p>Kami bekerjasama dengan jasa foto Toni Jasa Foto Malioboro (@toni_jasafotomalioboro). Bersama-sama, kami berkomitmen untuk memberikan pengalaman terbaik bagi pelanggan kami.</p>
          </div>
        </div>
        <div class="col" id="colom2">
          <div class="image-container">
            <img src="img/makeup.jpg" alt="MakeUp" height="320px" style="border-radius: 16%;" />
          </div>
          <div class="text-container" style="margin-top: 16px;">
            <p>Untuk riasan kami bekerjasama dengan @merona.makeup! Kami siap memberikan pengalaman terbaik dengan menyajikan kombinasi sempurna antara busana elegan dan tata rias profesional.</p>
          </div>
        </div>
        <div class="col" id="colom3">
          <div class="image-container">
            <img src="img/busana.jpg" alt="Spot" height="320px" style="border-radius: 16%;" />
          </div>
          <div class="text-container" style="margin-top: 16px;">
            <p>Kami bekerja sama dengan Bruwnhouse (@bruwnhouse) untuk menghadirkan berbagai jenis busana yang
              stylish dan elegan.</p>
          </div>
        </div>
        <div class="col" id="colom4">
          <div class="image-container">
            <img src="img/spot.jpg" alt="Spot" height="320px" style="border-radius: 16%;" />
          </div>
          <div class="text-container" style="margin-top: 16px;">
            <p>Yogyakarta menawarkan spot foto menarik seperti Jalan Malioboro yang penuh warna dan selalu ramai, cocok untuk menangkap suasana kota. Museum Sonobudoyo menghadirkan nuansa sejarah dan budaya Jawa yang kaya.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="button text-center">
    <a href="login.php"><button>Pesan</button></a>
  </div> -->

  <!-- footer -->
  <footer class="footer text-center">
    <hr>
    <h2>Heritage.co</h2>
    <p>Jl. Kemetiran Kidul, Pringgokusuman, Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55272</p>
    <p>heritageco@gmail.com</p>
    <i data-feather="facebook">
      facebook
    </i>
    <i data-feather="instagram">instagram</i>
  </footer>
  <script>
    feather.replace();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>