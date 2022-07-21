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

  <!-- Menu -->
     <div class="container">
    <div class="row mt-3">
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="sate.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Sate</h5>
           <label class="card-text harga">Rp.15.000</label><br>
           <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="croffle.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Croffle</h5>
           <label class="card-text">Rp.15.000</label><br>
           <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="rendang.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Rendang</h5>
            <label class="card-text">Rp.40.000</label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="empek-empek.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Empek-Empek</h5>
            <label class="card-text">Rp.20.000</label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
     </div>  
     <div class="row mt-3">
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="ayambetutu.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ayam Betutu</h5>
            <label class="card-text">Rp.50.000</label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <div class="card border-dark ">
          <img src="sopbuntut.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Sop Buntut</h5>
            <label class="card-text">Rp.45.000</label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>        
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="pecel.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Pecel</h5>
            <label class="card-text"><strong>Rp.15.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>   
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="gadogado.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Gado-Gado</h5>
            <label class="card-text"><strong>Rp.17.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>    
    </div>
     <div class="row mt-3">
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="soto.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Soto</h5>
            <label class="card-text"><strong>Rp.10.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>  
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="rawon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Rawon</h5>
            <label class="card-text"><strong>Rp.25.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="gudeg.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Gudeg</h5>
            <label class="card-text"><strong>Rp.16.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="bikaambon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Bika Ambon</h5>
            <label class="card-text"><strong>Rp.40.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
      </div>
     <div class="row mt-3">
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="ayamtaliwang.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ayam Taliwang</h5>
            <label class="card-text"><strong>Rp.35.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div> 
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="ketoprak.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ketoprak</h5>
            <label class="card-text"><strong>Rp.13.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div> 
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="cotomakasar.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Coto Makasar</h5>
            <label class="card-text"><strong>Rp.17.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="mieaceh.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Mie Aceh</h5>
            <label class="card-text"><strong>Rp.16.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div> 
      </div>
     <div class="row mt-3">
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="esteh.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Es Teh</h5>
            <label class="card-text"><strong>Rp.5.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="esjeruk.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Es Jeruk</h5>
            <label class="card-text"><strong>Rp.5.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div> 
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="wedanguwuh.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Wedang Uwuh</h5>
            <label class="card-text"><strong>Rp.11.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div> 
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="wedangjahe.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Wedang Jahe</h5>
            <label class="card-text"><strong>Rp.7.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div> 
      </div>
     <div class="row mt-3">
     <div class="col-md-3 mt-4">
        <div class="card border-dark">
          <img src="mineral.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Air Mineral</h5>
            <label class="card-text"><strong>Rp.5.000</strong></label><br>
            <a href="pesanan.php" class="btn btn-success btn-sm btn-block">PESAN</a>
          </div>
        </div>
      </div>
  </div>
  <!-- Akhir Menu -->

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