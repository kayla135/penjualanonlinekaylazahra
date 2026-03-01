<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form action="proses-barang.php" method="post">
        <fieldset>
        <br>
        Kode Barang: <input type="text" name="kode-brg"><br />
        <br>
        Nama Barang: <input type="text" name="nama-brg"><br />
        <br>
        Merk: <input type="text" name="merk-brg"><br />
        <br>
        Harga Barang: <input type="text" name="harga-brg"><br />
        <br>
        Jumlah Persediaan: <input type="text" name="jml-brg"><br />
        <br>

        <button type="submit" name="submit">Simpan</button>
        </fieldset>
    </from>
</body>
</html>