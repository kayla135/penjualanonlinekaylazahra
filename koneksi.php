<?php

$server = "localhost:3307";
$user = "root";
$password = "";
$database = "penjualanonline";

$db = mysqli_connect($server, $user, $password, $database);

if(!$db){
    die("gagal terhubung ke database :". mysql_connect_error());
}

?>