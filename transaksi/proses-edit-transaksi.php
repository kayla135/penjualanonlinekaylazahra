<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {

    $kode_transaksi = $_POST['kode_transaksi'];
    $kode_brg = $_POST['kode_brg'];
    $nama_brg = $_POST['nama_brg'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total_bayar = $_POST['total_bayar'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE transaksi SET kode_transaksi='$kode_transaksi', kode_brg='$kode_brg',
            nama_brg='$nama_brg', harga='$harga', 
            jumlah='$jumlah', total_bayar='$total_bayar', tanggal='$tanggal'
            WHERE kode_transaksi='$kode_transaksi'";
    $query = mysqli_query($db, $sql);

    if ($result) {
        header("Location: data-transaksi.php");
    } else {
        header("Location: tambah-transaksi.php");
    }
} else {
     die("Akses dilarang...");

}
?>