<?php
session_start();
require 'config/database.php';

if (isset($_POST['submit'])) {
    $kode = trim($_POST['kode']);
    $nama = trim($_POST['nama']);
    $supplier = trim($_POST['supplier']);
    $kategori = trim($_POST['kategori']);
    $harga_supplier = trim($_POST['harga_supplier']);
    $harga_jual = trim($_POST['harga_jual']);

    $stmt = $konvigurasi->prepare(
        "INSERT INTO barang (kode, nama, supplier, kategori, harga_supplier, harga_jual) VALUES (?, ?, ?, ?, ? ,?)"
    );
    $stmt->bind_param("ssssss" ,$kode, $nama, $supplier, $kategori, $harga_supplier, $harga_jual);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Data berhasil di simpan";
    } else{
        $_SESSION['error'] = "Data gagal di simpan" . $stmt->error;
    }

    $stmt->close();
    $konvigurasi->close();

    header("Location: input_barang.php");
    exit;
    } else {
        header("Location: input_barang.php");
        exit;
    }
?>
    