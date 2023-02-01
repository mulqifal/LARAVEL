<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update langgan set nama='$nama', nik='$nik', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php");
 
?>