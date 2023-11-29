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
    <form action="controller/insertProduk.php" method="POST">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nm_produk"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="tex" name="harga"></td>
        </tr>
        <tr>
            <td>Jumlah Stock</td>
            <td><input type="text" name="jumlah"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan"></td>
        </tr>
        <tr>
            <td><button>Simpan</button></td>
        </tr>
    </table>
    </form>
</body>
</html>