<?php
//Include file koneksi ke database
include "../config/koneksi.php";


$platnomor= $_POST['platnomor'];
$tanggalkeluar= $_POST['tanggalkeluar'];
$waktukeluar= $_POST['waktukeluar'];



//menerima nilai dari kiriman form input-barang 
//$nama_barang=$_POST["nama_barang"];
//$harga=$_POST["harga"];
//$stok=$_POST["stok"];

//Query input menginput data kedalam tabel barang


$cek = mysqli_query($koneksi,"select * from datamobil where platnomor='$platnomor'");


//Mengeksekusi/menjalankan query diatas	

//Kondisi apakah berhasil atau tidak
//	echo "Berhasil mendaftar!";

if($cek==1){
mysqli_query($koneksi,"update datamobil set tanggalkeluar='$tanggalkeluar', waktukeluar='$waktukeluar' where platnomor='$platnomor'");
mysqli_query($koneksi,"update tempat set platnomor='' where platnomor='$platnomor'");
header("Location: hasil.php?platnomor=$platnomor");

}
else{
	header("Location: home.php?pesan=gagal");}
?>
