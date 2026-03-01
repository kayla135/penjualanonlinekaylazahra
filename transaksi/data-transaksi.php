<?php
include('../koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
</head>
<body>
    <h1>Data Transaksi</h1>
    <nav>
        <ul>
             <li><a href="../index.php">Kembali</a></li>
           <li><a href="tambah-transaksi.php">[+]Tambah Transaksi</a></li>
        </ul>
    </nav>
         <br>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Transaksi</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total bayar</th>
                <th>Tanggal</th>
                <th>tindakan</th>


            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM transaksi";
            $query = mysqli_query($db, $sql);

            while($databarang = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$databarang['kode_transaksi']."</td>";
                echo "<td>".$databarang['kode_brg']."</td>";
                echo "<td>".$databarang['nama_brg']."</td>";
                echo "<td>".$databarang['harga']."</td>";
                echo "<td>".$databarang['jumlah']."</td>";
                echo "<td>".$databarang['total_bayar']."</td>";
                echo "<td>".$databarang['tanggal']."</td>";

                echo "<td>";
                echo "<a href='from-edit-transaksi.php?kode_transaksi=".$databarang['kode_transaksi']."'>Edit</a> | ";
                echo "<a href='hapus-transaksi.php?kode_transaksi=".$databarang['kode_transaksi']."'>Hapus</a> ";
                echo "</td>";


                echo "</tr>";
            }

            ?>
        </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>