<?php
session_start();

include "database.php";

if (isset($_POST["pesan"])) {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $fullname = $firstname . ' ' . $lastname;
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $date = $_POST["date"];
  $adress = $_POST["adress"];
  $service = $_POST["Service"];
  $price = $_POST["Price"];
  $note = $_POST["note"];

  $sql = "INSERT INTO transaksi (nama_lengkap, email, phone, date, address, service, price, note) VALUES
        ('$fullname', '$email', '$phone', '$date', '$adress', '$service', '$price', '$note')";

  if ($db->query($sql)) {
    $_SESSION['success'] = 'Pesanan Anda telah berhasil dibuat';
    header("Location: get.php");
    exit(); // Exit untuk menghentikan eksekusi skrip selanjutnya
  } else {
    $_SESSION['error'] = 'Terjadi kesalahan dalam membuat pesanan';
    header("Location: get.php");
    exit(); // Exit untuk menghentikan eksekusi skrip selanjutnya
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- feather icont -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- style -->
  <link rel="stylesheet" href="style.css">
  <title>Pemesanan</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Heritage.co</a>
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
            <a class="nav-link" href="index.php#about">About</a>
            <a class="nav-link" href="index.php#service">Service</a>
            <a class="nav-link" href="index.php#testi">Testi</a>
            <a class="nav-link" href="index.php#partner">Partner</a>
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

  <section class="form" id="form">
    <?php
    if (isset($_SESSION['success'])) {
      echo '<div class="alert alert-success" role="alert">' . $_SESSION['success'] . '</div>';
      unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
      echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
      unset($_SESSION['error']);  // Hapus pesan error setelah ditampilkan
    }
    
    ?>
    <form class="row g-3" method="POST">
      <div class="col-md-6">
        <label for="inputfirstname" class="form-label ">First Name</label>
        <input type="text" class="form-control" name="firstname">
      </div>
      <div class="col-md-6">
        <label for="inputlastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lastname">
      </div>
      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="col-md-6">
        <label for="inputphone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone">
      </div>
      <div class="col-12">
        <label for="inputdate" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
      <div class="col-12">
        <label for="inputadress" class="form-label">Address</label>
        <input type="text" class="form-control" name="adress">
      </div>
      <div class="col-12">
        <label for="inputService" class="form-label">Service</label>
        <input type="text" class="form-control" name="Service">
      </div>
      <div class="col-12">
        <label for="inputPrice" class="form-label">Price</label>
        <input type="number" class="form-control" name="Price">
      </div>
      <div class="col-12">
        <label for="inputnote" class="form-label">Note</label>
        <textarea class="form-control" id="floatingTextarea2" name="note" style="height: 100px"></textarea>
      </div>
      <!-- <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div> -->
      <div class="col-12 text-center">
        <button type="submit" class="btn" name="pesan">Pesan</button>
        <a href="index.php" class="btn">Batal</a>
      </div>
    </form>
  </section>
</body>

</html>