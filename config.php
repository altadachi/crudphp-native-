<?php

function query($query) {
    global $conn;
    $result=mysqli_query($conn, $query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    global $conn;
    $nama_barang       = $data["nama_barang"];
    $jumlah            = $data["jumlah"];
    $satuan            = $data["satuan"];
    $query             = "INSERT INTO barang VALUES ('','$nama_barang','$jumlah','$satuan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE id=$id");
    return mysqli_affected_rows($conn);

}

function edit($data) {
    global $conn;
    $id                = $data["id"];
    $nama_barang       = $data["nama_barang"];
    $jumlah            = $data["jumlah"];
    $satuan            = $data["satuan"];
    $query             = "UPDATE barang SET nama_barang='$nama_barang', jumlah='$jumlah', satuan='$satuan' WHERE id=$id ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

?>
