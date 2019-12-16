<?php
require 'koneksi.php';
require 'config.php';
if ( isset($_POST["submit"])) {
    if ( tambah ($_POST) > 0 ) {
        echo "
        <script> 
        alert('SELAMAT data berhasil ditambahkan');
        document.location.href = 'index.php';

        </script>
        ";
    } else {
        echo "
        <script> 
        alert('MAAF data belum berhasil ditambahkan');
        document.location.href = 'index.php';
        
        </script>
        ";
    }
}

?>

<html>
    <head>
        <title>FORM TAMBAH DATA</title>
    </head>
    <body>
        <h1> FORM TAMBAH DATA </h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang" placeholder="Masukkan Nama Barang"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" placeholder="isikan jumlah dengan angka"></td>
                </tr>
                <tr>
                    <td>satuan</td>
                    <td>:</td>
                    <td>
                        <select class="option" name="satuan" >
                            <option value="unit">Unit</option>
                            <option value="buah">Buah</option>
                            <option value="pcs">PCS</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <button type="submit" name="submit">TAMBAH DATA</button>
                </tr>
            </table>
        </form>
    </body>
</html>