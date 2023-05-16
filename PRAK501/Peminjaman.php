<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Section</title>
    <style>
        .container{
            margin-top: 10px;
            width: 45%;
        }
        a{
	        text-decoration: none;
	        font-size: 15px;
	        font-family: "playfair-display";
        }
    </style>
</head>
<body>
    <div class="container">
    <table border="1" class="table table-dark table-hover">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("peminjaman") ?>
    </table>
    <br>
    <a href="FormPeminjaman.php" class="btn btn-success" style="float: right;">Tambah Data</a>
    </div>
</body>
</html>