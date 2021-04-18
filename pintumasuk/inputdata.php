<?php
//Include file koneksi ke database
include "../config/koneksi.php";


$platnomor= $_POST['platnomor'];
$tanggalmasuk= $_POST['tanggalmasuk'];
$waktumasuk= $_POST['waktumasuk'];



//menerima nilai dari kiriman form input-barang 
//$nama_barang=$_POST["nama_barang"];
//$harga=$_POST["harga"];
//$stok=$_POST["stok"];

//Query input menginput data kedalam tabel barang
  $sql="INSERT INTO datamobil (id, platnomor, tanggalmasuk, tanggalkeluar, waktumasuk, waktukeluar) VALUES
		('', '$platnomor', '$tanggalmasuk', '', '$waktumasuk', '')";


//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi, $sql);
$hasil=mysqli_query($koneksi, $sql2);
//Kondisi apakah berhasil atau tidak
//	echo "Berhasil mendaftar!";

// if($hasil==1){
header("Location: home.php?pesan=sukses");

// }
// else{
// 	header("Location: daftar.php?pesan=gagal");
?>
