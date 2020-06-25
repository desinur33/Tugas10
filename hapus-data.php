<?php

include("koneksi.php");

if(isset($_GET['id_p'])){

    $id = $_GET['id_p'];

    
    $sql = "DELETE FROM produk WHERE id_produk=$id";
    $query = mysqli_query($mysqli, $sql);

    
    if( $query ){
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>