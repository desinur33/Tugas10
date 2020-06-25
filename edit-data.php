<?php

include("koneksi.php");

if(isset($_POST['update'])){

 
    $id = $_POST['id'];
    $nama = $_POST['namabrg'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $sql = "UPDATE produk SET nama_produk='$nama', keterangan='$keterangan', jumlah='$jumlah', harga='$harga' WHERE id_produk=$id";
    $query = mysqli_query($mysqli, $sql);


    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
