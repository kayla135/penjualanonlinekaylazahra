<?php
include("../koneksi.php");

if(isset($_GET['kode_transaksi'])){ 
    $kode= $_GET['kode_transaksi'];

    $sql = "DELETE FROM transaksi WHERE kode_transaksi=$kode";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: data-transaksi.php?status=hapus');
    }else{
        die("Gagal menghapus...");
    }
} else{
    die("Akses dilarang..");
}