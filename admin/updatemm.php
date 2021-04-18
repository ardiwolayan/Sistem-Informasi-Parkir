<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$platnomor = $_POST['platnomor'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggalmasuk'];
$waktu = $_POST['waktumasuk'];

// update data ke database

// mengalihkan halaman kembali ke index.php
$data = mysqli_query($koneksi, "SELECT * FROM datamobil
INNER JOIN tempat ON datamobil.platnomor=tempat.platnomor where tempat='$tempat'");
$data2 = mysqli_query($koneksi, "SELECT * FROM datamobil INNER JOIN tempat ON datamobil.platnomor=tempat.platnomor where datamobil.platnomor='$platnomor'");
// menghitung jumlah data yang ditemukan
$d = mysqli_fetch_array($data );
$cek1 = mysqli_num_rows($data);
$cek2 = mysqli_num_rows($data2);

$dataa = mysqli_query($koneksi,"select max(id) as maxi from tempat");
$mx = mysqli_fetch_array($dataa);

if(($cek1 != 1 || $cek2 !=1)&& $tempat<=$mx['maxi']){
	mysqli_query($koneksi,"update datamobil set platnomor='$platnomor', tanggalmasuk='$tanggal', waktumasuk='$waktu' where datamobil.id='$id'");
	mysqli_query($koneksi,"update tempat set tempat='$tempat' where tempat.id='$id'");	
	header("Location:mobilmasuk.php?pesan=sukses");
}else{
	header("Location:mobilmasuk.php?pesan=gagal");

}

?>