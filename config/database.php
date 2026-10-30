<?php
$host = "localhost";
$name = "root";
$pass = "";
$db = "kasir";

$konvigurasi = new mysqli($host,$name,$pass,$db);

if($konvigurasi->connect_error) {
    die("Koneksi gagal: " . $konvigurasi->connect_error);
}