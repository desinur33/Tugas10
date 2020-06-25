<?php include ("koneksi.php");

if($_POST['simpan']=="simpan"){
    $nama = $_POST['namabrg'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah= $_POST['jumlah'];

    $sql = "INSERT INTO produk (namaProduk, keterangan, harga, jumlah) VALUE ('$nama', '$keterangan', '$harga', '$jumlah')";
    $query = mysqli_query($mysqli, $sql);

 
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
    
}else{
    die("Akses dilarang...");
    }

?>

?>
 