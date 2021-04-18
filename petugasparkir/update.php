<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$platnomor = $_POST['platnomor'];

// update data ke database
mysqli_query($koneksi,"update tempat set platnomor='$platnomor' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("Location:home.php");




?>