<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylee.css">

    <title>URBAN KITCHEN</title>
  </head>
  <body>

<SCRIPT LANGUAGE="JavaScript">
  function plh(pilihan){
    alert("Apakah anda yakin pindah di " + pilihan);
    document.bgColor=pilihan;
  }
</SCRIPT>

  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">URBAN KITCHEN</span></h1>
          <hr>
          <p class="lead font-weight-bold">Welcome to our Restaurant<br>Real Taste Real Food</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.php"><strong>URBAN KITCHEN</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php" onclick="plh('HOME')">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php" onclick="plh('MENU MAKANAN')">MENU MAKANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php" onclick="plh('PESANAN')">PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="lihat.php" onclick="plh('DAFTAR PESANAN')">DAFTAR PESANAN</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->
<?php 

echo "<head><title>keranjang</title></head>";
$fp = fopen("guestbook.txt","r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Pesanan </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Hari pesan </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='daftar_menu.php'> Pesan Lagi </a>";

?>

<!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            </i>Copyright © 2022 - PWEB. All Rights Reserved.</p>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </body>
</html>