<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$tempat = $_POST['tempat'];


// $id = "2";
// $tempat = "A4";

// update data ke database

// mengalihkan halaman kembali ke index.php
$data = mysqli_query($koneksi, "SELECT * FROM tempat where tempat='$tempat' && platnomor=''");


$cek = mysqli_num_rows($data);



if($cek != 1){
	mysqli_query($koneksi,"update tempat set tempat='$tempat' where id=$id");
	header("Location:editruangparkir.php?pesan=editsukses");
}else{
	header("Location:editruangparkir.php?pesan=editgagal");

}

?>