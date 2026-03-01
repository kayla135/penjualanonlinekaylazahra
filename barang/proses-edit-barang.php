<?php
 include '../koneksi.php';

 if(isset($_POST['submit'])){
     $kode_brg = $_POST['kode_brg'];
     $nama_brg = $_POST['nama_brg'];
     $merk = $_POST['merk'];
     $harga = $_POST['harga'];
     $jumlah = $_POST['jumlah'];

    $sql = "UPDATE barang SET nama_brg='$kode_brg', nama_brg='$nama_brg', merk='$merk', harga='$harga', jumlah='$jumlah' WHERE kode_brg='$kode_brg'";
    $result = mysqli_query($db, $sql);
    
    if($result){
        echo "<script>alert('Data barang berhasil ditambahkan');</script>";
        header("Location: data-barang.php");
    } else {
      echo "<script>alert('Gagal menambahkan data barang');</script>";
      header("Location: form-edit-barang.php");
    }
 }
 ?>