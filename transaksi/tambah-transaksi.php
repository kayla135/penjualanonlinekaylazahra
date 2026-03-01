<?php
include("../koneksi.php");

$sql = "SELECT * FROM barang";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
</head>
<body>
    <header>
    <h1>Tambah Transaksi</h1>
    </header>
    <form action="proses-tambah-transaksi.php" method="post">
        <fieldset>
            <p>
                <label for="kode-trx">Kode Transaksi: </label>
                <input type="text" name="kode-trx"/>
            </p>
            <p>
                <label for="kode-trx">Kode Transaksi: </label>
                <select name="kode-brg" id="kode-brg">
                    <option value="" disabled selected> --- Pilih Barang ---</option>
                    <?php
                    while($barang = mysqli_fetch_array($result)) {
                        echo "<option value=".$barang['kode_brg']
                        ." data-nama = ".$barang['nama_brg']
                        ." data-hrg = ".$barang['harga'].">"
                       .$barang['kode_brg']."-".$barang['nama_brg']
                       ."</option>";
                    }
                    ?>
                </select>
        </p>
        <p>
            <label for="nama-brg">Nama Barang: </label>
            <input type="text" name="nama-brg" id="nama-brg" readonly />
        </p>
        <p>
            <label for="harga-brg">Harga Barang: </label>
            <input type="number" name="harga-brg" id="harga-brg" readonly />
        </p>
        <p>
            <label for="jml-brg">Jumlah Pembelian: </label>
            <input type="number" name="jml-brg" id="jml-brg" placeholder="Jumlah Pembelian" />
        </p>
        <p>
            <label for="tot-hrg">Total Bayar: </label>
            <input type="number" name="tot-hrg" id="tot-hrg" readonly />
        </p>
        <p>
            <label for="tgl-trx">Tanggal: </label>
            <input type="date" name="tgl-trx" placeholder="Tanggal" />
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>
        </fieldset>
    </from>
</body>

</html>
