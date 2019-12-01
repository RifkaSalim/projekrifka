<?php
  require './crud/functions.php';
    $penyewaan_barang = query("SELECT * FROM penyewaan_barang");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Link Icon Fontawesome -->
  <!-- Link Icon -->
  <link rel="icon" href="assets/image/jpone.png">

  <!--Css Style  -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Penyewaan Buku Komik</title>
</head>

<body>
  <!-- ini untuk navbar yaa -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Komik</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link active" href="#">Daftar Buku</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Kategori Komik
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Drama</a>
            <a class="dropdown-item" href="#">Drakor</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <a href="#" class="text-danger float-right mr-3">Masuk</a>
      <a href="#" class="text-danger float-right mr-3">Cara Penyewaan</a>
    </div>
  </nav>
  <!-- ini untuk slide/Gambar jalan -->
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="assets/image/background.png" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="assets/image/background.png" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="assets/image/background.png" class="d-block w-100" alt="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Ini untuk Card Penyewaan Buku -->
  <div class="container">
    <h3>Daftar Buku Komik</h3>
    <form class="form-inline float-right mb-5">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="row">
      <div class="col-md-4">
        <div class="card mt-3" style="width: 18rem;">
          <a href="sewa.html">
            <img src="assets/image/komik1.jpg" style="height: 250px;" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <?php
        foreach ($penyewaan_barang as $row) :
      ?>
      <div class="col-md-4 ml-5">
        <div class="card mt-3" style="width: 18rem;">
          <a href="sewa.php">
            <img src="assets/image/<?= $row['gambar'];?>" style="height: 250px;" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <p class="card-text"><?= $row['deskripsi'];?> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae impedit laudantium eum autem,  </p>
              <?php
                endforeach;
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50 mt-3">
    <div class="container text-center">
      <small>Copyright &copy; NurKholifah & Yurifkah 2019</small>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>