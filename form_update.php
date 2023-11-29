<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SEDERHANA</title>
</head>
<body>
    <h3>CRUD SEDERHANA</h3>
    <a href="index.php"><button>Back to Home</button></a>
    <?php 
        include "config/connector.php";
        $kdproduk = $_GET['id'];
        $sql = "SELECT * FROM produk WHERE kd_produk ='$kdproduk'";
        $result = mysqli_query($connect, $sql);
        while($hasil = mysqli_fetch_array($result)){
    ?>
    <form action="controller/updateProduk.php" method="POST">
        <input type="hidden" name="kdproduk" value="<?php echo $hasil['kd_produk'] ?>">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nm_produk" value="<?php echo $hasil['nama_produk'] ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="tex" name="harga" value="<?php echo $hasil['harga'] ?>"></td>
        </tr>
        <tr>
            <td>Jumlah Stock</td>
            <td><input type="text" name="jumlah" value="<?php echo $hasil['jumlah'] ?>"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan" value="<?php echo $hasil['keterangan'] ?>"></td>
        </tr>
        <tr>
            <td><button>Simpan</button></td>
        </tr>
    </table>
    <?php } ?>
    </form>
</body>
</html>