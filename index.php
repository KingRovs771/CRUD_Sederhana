<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SEDERHANA</title>
</head>
<body>
    <h3>CRUD SEDERHANA</h3>
    <a href="form_insert.php"><button>Tambah Data</button></a>
    <table border="1" width="70%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah Stock</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        <?php
        include "config/connector.php";
        $sql = mysqli_query($connect, "SELECT * FROM produk");
        while($row = mysqli_fetch_array($sql)){
            $no++;
        ?>
        <tr>
            <td></td>
            <td><?php echo $row['nama_produk'] ?></td>
            <td><?php echo $row['harga'] ?></td>
            <td><?php echo $row['jumlah'] ?></td>
            <td><?php echo $row['keterangan'] ?></td>
            <td>
                <a href="form_update.php?id=<?php echo $row['kd_produk'] ?>"><button>Update</button></a>
                <a href="controller/deleteProduk.php?id=<?php echo $row['kd_produk'] ?>"><button>Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>