<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into langgan values('$id','$nama','$nik','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php");
 
?>