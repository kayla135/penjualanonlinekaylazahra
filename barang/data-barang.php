<?php
include("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <nav>
         <ul>
            <li><a href="../index.php">kembali</a></li>
            <li><a href="tambah-barang.php"> [+]Tambah Barang</a></li>
         </ul>
    </nav>
        <br>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM barang";
            $query = mysqli_query($db, $sql);

            while($barang = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$barang['kode_brg']."</td>";
                echo "<td>".$barang['nama_brg']."</td>";
                echo "<td>".$barang['merk']."</td>";
                echo "<td>".$barang['harga']."</td>";
                echo "<td>".$barang['jumlah']."</td>";

                echo "<td>";
                echo "<a href='from-edit-barang.php?kode_brg=".$barang['kode_brg']."'>Edit</a> | ";
                echo "<a href='hapus-barang.php?kode_brg=".$barang['kode_brg']."'>Hapus</a> | ";
                echo "</td>";
                echo "</tr>";
            }

            ?>
        </tbody>
        
</body>
</html>