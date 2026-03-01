<?php
 include '../koneksi.php';

 if(isset($_POST['submit'])){
     $kode_brg = $_POST['kode_brg'];
     $nama_brg = $_POST['nama_brg'];
     $merk = $_POST['merk'];
     $harga = $_POST['harga'];
     $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO barang (kode_brg, nama_brg, merk, harga, jumlah) VALUES ('$kode_brg', '$nama_brg', '$merk', '$harga', '$jumlah')";
    $result = mysqli_query($db, $sql);
    
    if($result){
        echo "<script>alert('Data barang berhasil ditambahkan');</script>";
        header("Location: data-barang.php");
    } else {
      echo "<script>alert('Gagal menambahkan data barang');</script>";
      header("Location: tambah-barang.php");
    }
 }
 ?>