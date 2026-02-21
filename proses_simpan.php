<?php
include 'koneksi.php';

$nama   = $_POST['nama_produk'];
$desk   = $_POST['deskripsi'];
$beli   = $_POST['harga_beli'];
$jual   = $_POST['harga_jual'];
$gambar = $_FILES['gambar_produk']['name'];

$tmp = $_FILES['gambar_produk']['tmp_name'];

move_uploaded_file($tmp, 'gambar/'.$gambar);

mysqli_query($koneksi,"INSERT INTO produk 
VALUES('', '$nama','$desk','$beli','$jual','$gambar')");

header("location:index.php");
?><?php
include 'koneksi.php';

$nama   = $_POST['nama_produk'];
$desk   = $_POST['deskripsi'];
$beli   = $_POST['harga_beli'];
$jual   = $_POST['harga_jual'];
$gambar = $_FILES['gambar_produk']['name'];

$tmp = $_FILES['gambar_produk']['tmp_name'];

move_uploaded_file($tmp, 'gambar/'.$gambar);

mysqli_query($koneksi,"INSERT INTO produk 
VALUES('', '$nama','$desk','$beli','$jual','$gambar')");

header("location:index.php");
?>