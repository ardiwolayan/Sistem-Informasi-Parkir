<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$platnomor = $_POST['platnomor'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggalkeluar'];
$waktu = $_POST['waktukeluar'];

$data = mysqli_query($koneksi, "SELECT * FROM datamobil
INNER JOIN tempat ON datamobil.platnomor=tempat.platnomor WHERE tempat='$tempat'");
$data2 = mysqli_query($koneksi, "SELECT * FROM datamobil INNER JOIN tempat ON datamobil.platnomor=tempat.platnomor WHERE datamobil.platnomor='$platnomor'");
// menghitung jumlah data yang ditemukan
$d = mysqli_fetch_array($data );
$cek1 = mysqli_num_rows($data);
$cek2 = mysqli_num_rows($data2);

$dataa = mysqli_query($koneksi,"select max(id) as maxi from tempat");
$mx = mysqli_fetch_array($dataa);


if(($cek1 != 1 || $cek2 !=1)&& $tempat<=$mx['maxi']){
	mysqli_query($koneksi,"update datamobil set platnomor='$platnomor', tanggalkeluar='$tanggal', waktukeluar='$waktu' where $datamobil.id='$id'");
	mysqli_query($koneksi,"update tempat set tempat='$tempat' where tempat.id='$id'");	
	header("Location:mobilkeluar.php?pesan=sukses");
}else{
	header("Location:mobilkeluar.php?pesan=gagal");

}
?>