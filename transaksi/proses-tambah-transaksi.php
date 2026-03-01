<?php
 include '../koneksi.php';

 if(isset($_POST['submit'])){
     $kode_transaksi = $_POST['kode_transaksi'];
     $kode_brg = $_POST['kode_brg'];
     $nama_brg = $_POST['nama_brg'];
     $harga = $_POST['harga'];
     $jumlah = $_POST['jumlah'];
     $total_bayar = $_POST['total_bayar'];
     $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO transaksi (kode_transaksi, kode_brg, nama_brg, harga, jumlah, total_bayar, tanggal) VALUES ('$kode_transaksi', '$kode_brg', '$nama_brg', '$harga', '$jumlah', '$total_bayar', '$tanggal')";
    $result = mysqli_query($db, $sql);
    
    if($query){
        header('Location: data-transaksi.php?status=sukses');
    } else {
      header('Location: data-transaksi.php?status=gagal');
    }
 } else {
     die("Akses dilarang...");

     
 }
 ?>