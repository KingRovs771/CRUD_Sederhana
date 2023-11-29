<?php
    include "../config/connector.php";
    
    $kdproduk = $_GET['id'];
    $deleteProduk = mysqli_query($connect, "DELETE FROM produk WHERE kd_produk='$kdproduk'");
    header("location:../index.php");
?>