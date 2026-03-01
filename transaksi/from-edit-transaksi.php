<?php
include '../koneksi.php';

if(!isset($_GET['kode_transaksi'])){
    header('location: data-transaksi.php');
}
$kode = $_GET['kode_transaksi'];

$sql = "SELECT * FROM transaksi WHERE kode_transaksi = $kode";
$query = mysqli_query($db, $sql);
$transaksi = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From edit transaksi</title>
</head>
<body>
    <header>
    <h1>From Edit Transaksi</h1>
    </header>
    <form action="proses-edit-transaksi.php" method="POST">
        <fieldset>
        <p>
            <label for="kode">Kode Transaksi :</label>
            <input type="text" name="kode_transaksi" value="<?php echo $transaksi['kode_transaksi'] ?>" />
        </p>
        <p>
            <label for="kode">Kode Barang :</label>
            <input type="number" name="kode_brg" value="<?php echo $transaksi['kode_brg'] ?>" />
        </p>
        <p>
            <label for="kode">Nama Barang :</label>
            <input type="number" name="nama_brg" value="<?php echo $transaksi['nama_brg'] ?>" />
        </p>
        <p>
            <label for="kode">Harga Transaksi :</label>
            <input type="number" name="harga" value="<?php echo $transaksi['harga'] ?>" />
        </p>
        <p>
            <label for="kode">Jumlah Transaksi :</label>
            <input type="number" name="jumlah" value="<?php echo $transaksi['jumlah'] ?>" />
        </p>
        <p>
            <label for="kode">Total Bayar :</label>
            <input type="number" name="total_bayar" value="<?php echo $transaksi['total_bayar'] ?>" />
        </p>
        <p>
            <label for="kode">Tanggal Transaksi :</label>
            <input type="date" name="tanggal" value="<?php echo $transaksi['tanggal'] ?>" />
        </p>
        <p>
         <button type="submit" value="Simpan" name="simpan">Simpan Transaksi</button>
        </p>
        </fieldset>
    </from>
</body>
</html>
