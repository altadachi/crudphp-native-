<?php
require 'koneksi.php';
require 'config.php';
$id =$_GET["id"];
$brg= query("SELECT * FROM barang WHERE id=$id") [0];
if ( isset($_POST["submit"])) {
    if ( edit ($_POST) > 0 ) {
        echo "
        <script> 
        alert('SELAMAT data berhasil diubah');
        document.location.href = 'index.php';

        </script>
        ";
    } else {
        echo "
        <script> 
        alert('MAAF data belum berhasil di ubah');
        document.location.href = 'index.php';
        
        </script>
        ";
    }
}

?>

<html>
    <head>
        <title>FORM EDIT DATA</title>
    </head>
    <body>
        <h1> FORM EDIT DATA </h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?= $brg["id"]; ?> ">
                </tr>
                <tr>  
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang" value="<?= $brg["nama_barang"]; ?>" ></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" value="<?= $brg["jumlah"]; ?>" ></td>
                </tr>
                <tr>
                    <td>satuan</td>
                    <td>:</td>
                    <td><select class="option" name="satuan"  >
                            <option value="unit">Unit</option>
                            <option value="buah">Buah</option>
                            <option value="pcs">PCS</option>

                        </select>
               
                </td>
                </tr>
                <tr>
                    <button type="submit" name="submit">EDIT</button>
                </tr>
            </table>
        </form>
    </body>
</html>