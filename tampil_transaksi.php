<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS ONLY -->
  <link href="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  <?php
    include "header_user.php";
  ?>
  <br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>DATA TRANSKSI</h1>
        <form method="POST" action="tampil_transaksi.php" class="d-flex">
        </form>  
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA MEMBER</th>
              <th scope="col">TANGGAL</th>
              <th scope="col">BATAS WAKTU</th>
              <th scope="col">TANGGAL BAYAR</th>
              <th scope="col">STATUS</th>
              <th scope="col">PEMBAYARAN</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
           
            $query_transaksi = mysqli_query($conn, "select * from transaksi");
            $no=0;
            while($data_transaksi=mysqli_fetch_array($query_transaksi)){
            $no++;
            ?>
            
            <tr>
              <td><?=$no?></td>
              <td><?=$data_transaksi['nama_transaksi']?></td>
              <td><?=$data_transaksi['transaksiname']?></td>
              <td><?=$data_transaksi['role']?></td>
              <td>
                <a href="ubah_transaksi.php?id_transaksi=
                <?=$data_transaksi['id_transaksi']?>" class="btn btn-success">Ubah</a>
                <a href="hapus_transaksi.php?id_transaksi=
                <?=$data_transaksi['id_transaksi']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?'")>Hapus</a>
              </td>
            </tr>
            <?php 
            } 
            ?>
          </tbody>
        </table>
        <a href="tambah_transaksi.php" type="button" class="btn btn-primary">Tambah
      
  
</body>
</html>