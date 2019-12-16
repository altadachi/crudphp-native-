<?php
require 'koneksi.php';
require 'config.php';
$barang = query("SELECT * FROM barang ");

?>

<!DOCTYPE html>
<html>
<head>
<title> Daftar Barang</title>
<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
    <h1>Daftar Barang</h1>
    <a href="tambah.php">Tambah Data</a>

    <div class="container">
    <table class="table table-striped border">
    <thead>    
    <tr>
       <th>No</th>
       <th>Nama Barang</th>
       <th>Jumlah</th>
       <th>Satuan</th>
       <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        <?php foreach ($barang as $brg): {}
        ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $brg ["nama_barang"] ?></td>
        <td><?= $brg ["jumlah"] ?></td>
        <td><?= $brg ["satuan"] ?></td>
        
        <td><a href="edit.php?id=<?= $brg ["id"] ?>">EDIT</a> || <a href="hapus.php?id=<?= $brg ["id"] ?>">HAPUS</a></td>
    </tr>

    <?php $i++; ?>
    <?php endforeach; ?>
    
    </tbody>
    </table>
    </div>
</body>
</html>