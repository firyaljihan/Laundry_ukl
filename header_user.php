<?php 
 session_start();
   
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LAUNDRY F2M</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home_user.php">Home</a>
            </li>
            <?php
            if($_SESSION['role']=='Admin'){
              ?>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="paket.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_user.php">Pengguna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_member.php">Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_transaksi.php">Transaksi</a>
            </li>
              <?php
            }
            if($_SESSION['role']=='Kasir'){
              ?>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_member.php">Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_transaksi.php">Transaksi</a>
            </li>
              <?php
            }
            if($_SESSION['role']=='Owner'){
                ?>
                <li class="nav-item">
              <a class="nav-link" aria-current="page" href="detail_transaksi.php">Laporan</a>
            </li>
                <?php
              }
            ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px"></div>
</body>

</html>