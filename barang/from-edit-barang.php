<?php
include '../koneksi.php';
if(!isset($_GET['kode_brg'])) {
   $kode_brg =$_GET['kode_brg'];
   $query ="SELECT *FROM barang WHERE kode_brg =$kode_brg";
   $result =mysqli_query($db, $query);
}
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
    <form action="proses-barang.php" method ="post">
        <?php
        if(isset($result) && mysqli_num_rows($result) ==1) {
            while($row = mysqli_fetch_array($result)) {


            
        ?>
        <fieldset>
        <br>
        Kode Barang: <input type="text" name="kode_brg" value="<?php echo $row['kode_brg']; ?>"><br />
        <br>
        Nama Barang: <input type="text" name="nama_brg" value="<?php echo $row['nama_brg']; ?>"> <br />
        <br>
        Merk: <input type="text" name="merk" value="<? echo $row['merk']; ?>"><br />
        <br>
        Harga Barang: <input type="number" name="harga" value="<?php echo $row['harga']; ?>"><br />
        <br>
        Jumlah Persediaan: <input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>"><br />
        <br>
        <button type="submit" name="submit">Simpan</button>
    </fieldset>
    <?php
            }
        }
        ?>
</body>
</html>