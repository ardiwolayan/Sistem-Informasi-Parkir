<?php
//Include file koneksi ke database
include "../config/koneksi.php";


$tempat= $_POST['tempat'];



//menerima nilai dari kiriman form input-barang 
//$nama_barang=$_POST["nama_barang"];
//$harga=$_POST["harga"];
//$stok=$_POST["stok"];

//Query input menginput data kedalam tabel barang


//Mengeksekusi/menjalankan query diatas	

//Kondisi apakah berhasil atau tidak
//	echo "Berhasil mendaftar!";



$data = mysqli_query($koneksi, "SELECT * FROM tempat where tempat='$tempat'");
$cek = mysqli_num_rows($data);

if($cek != 1){
	mysqli_query($koneksi, "INSERT INTO tempat (id, platnomor, tempat) VALUES
		('', '', '$tempat')");
	header("Location:editruangparkir.php?pesan=tambahsukses");
}else{
	header("Location:editruangparkir.php?pesan=tambahgagal");

}

?>
