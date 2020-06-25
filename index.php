<?php include ("koneksi.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Barang</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="input-barang.php" method="POST">
            <fieldset>
            <p>
                <label>Nama Barang : </label>
                <input type="text" name="namabrg">
            </p>
            <p>
                <label>Keterangan : </label>
                 <input type="textarea" name="keterangan">
            </p>
            <p>
                <label>Harga : </label>
                <input type="number" name="harga">
            </p>
            <p>
                <label>Jumlah : </label>
                 <input type="number" name="jumlah">
            </p>
            <p>
                <input type="submit" value="simpan" name="simpan">
            </p> 
        </fieldset>
        </form>
        <br>
        <table id="tampilan" border="1">
            <tr>
                <td>nama barang</td>
                <td>keterangan</td>
                <td>jumlah</td>
                <td>harga</td>
                <td>Aksi</td>
            </tr>
            <tbody id="barang">
        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($mysqli, $sql);

        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$barang['namaProduk']."</td>";
            echo "<td>".$barang['keterangan']."</td>";
            echo "<td>".$barang['jumlah']."</td>";
            echo "<td>".$barang['harga']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id_p=".$barang['id_produk']."'>Edit</a> | ";
            echo "<a href='hapus-data.php?id_p=".$barang['id_produk']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
            </tbody>
        </table>
    </body>
</html>