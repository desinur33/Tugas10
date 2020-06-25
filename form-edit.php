<?php
include('koneksi.php');

if( !isset($_GET['id_p']) ){
    header('Location: index.php');
}

$id = $_GET['id_p'];


$sql = "SELECT * FROM produk WHERE id_produk=$id";
$query = mysqli_query($mysqli, $sql);
$barang = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Barang</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <a href="index.php">Kembali </a>
        <form action="edit-data.php" method="POST">
        <h3> FORM EDIT BARANG </h3>
            <fieldset>
            <input type="hidden" name="id" value="<?php echo $barang['id_produk'] ?>" />
            <p>
                <label>Nama Barang : </label>
                <input type="text" name="namabrg" value="<?php echo $barang['nama_produk'] ?>">
            </p>
            <p>
                <label>Keterangan : </label>
                 <input type="textarea" name="keterangan" value="<?php echo $barang['keterangan']?>">
            </p>
            <p>
                <label>Harga : </label>
                <input type="number" name="harga" value="<?php echo $barang['harga']?>">
            </p>
            <p>
                <label>Jumlah : </label>
                 <input type="number" name="jumlah" value="<?php echo $barang['jumlah']?>">
            </p>
            <p>
                <input type="submit" value="update" name="update">
            </p> 
        </fieldset>
        </form>
</html>
