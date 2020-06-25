<?php
$server = 'localhost';
$database = 'arkademy';
$user = 'root';
$pass = '';

$mysqli = mysqli_connect($server,$user,$pass,$database);

if(!$mysqli){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>