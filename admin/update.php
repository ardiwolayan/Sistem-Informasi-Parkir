<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['petugas'];

// update data ke database
mysqli_query($koneksi,"update petugas set username='$username', password='$password', role='$role' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("Location:datapetugas.php");




?>