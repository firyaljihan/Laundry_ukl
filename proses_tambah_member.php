<?php
if($_POST){
    $nama=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($jenis_kelamin)){
        echo "<script>alert('jenis_kelamin tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($tlp)){
        echo "<script>alert('tlp tidak boleh kosong');location.href='tambah_member.php';</script>";
    }else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama_member, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tampil_member.php';</script>";
        }
    }
}
?>