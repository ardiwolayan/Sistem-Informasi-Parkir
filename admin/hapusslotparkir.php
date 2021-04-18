<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
$data= mysqli_query($koneksi,"select * from tempat where tempat!=0 and id='$id");
// mengalihkan halaman kembali ke index.php
$cek1 = mysqli_num_rows($data);


if($cek1 != 1){
	mysqli_query($koneksi,"delete from tempat where id='$id'");
	header("location:editruangparkir.php?pesan=hapussukses");
}else{
	header("Location:editruangparkir.php?pesan=hapusgagal");
}

?>