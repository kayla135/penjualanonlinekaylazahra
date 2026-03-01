<?php
include("../koneksi.php");

if(isset($_GET['kode_barang'])) { 
    $kode_brg = $_GET['id'];

    $sql = "DELETE FROM barang WHERE kode_brg=$kode_brg";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: data-barang.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang..");
}


?>