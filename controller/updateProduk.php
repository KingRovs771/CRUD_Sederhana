<?php
    include "../config/connector.php";
    $kdproduk   = $_POST['kdproduk'];
    $nm_produk  = $_POST['nm_produk'];
    $harga      = $_POST['harga'];
    $jumlah     = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];

    $updateProduk = mysqli_query($connect, "UPDATE produk SET nama_produk='$nm_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE kd_produk='$kdproduk'");
    header("location:../index.php");
?>