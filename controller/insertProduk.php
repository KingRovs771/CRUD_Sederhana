<?php
    include "../config/connector.php";
    $nm_produk  = $_POST['nm_produk'];
    $harga      = $_POST['harga'];
    $jumlah     = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];

    $insertProduk = mysqli_query($connect, "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$nm_produk', '$keterangan', '$harga', '$jumlah')");
    header("location:../index.php");
?>