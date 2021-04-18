<?php
//Include file koneksi ke database
include "../config/koneksi.php";


$username= $_POST['username'];
$password= $_POST['password'];
$petugas= $_POST['petugas'];



//menerima nilai dari kiriman form input-barang 
//$nama_barang=$_POST["nama_barang"];
//$harga=$_POST["harga"];
//$stok=$_POST["stok"];

//Query input menginput data kedalam tabel barang
  $sql="INSERT INTO petugas (id, username, password, role) VALUES
		('', '$username', '$password', '$petugas')";

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi, $sql);
//Kondisi apakah berhasil atau tidak
//	echo "Berhasil mendaftar!";
if($hasil==1){
	header("Location: daftar.php?pesan=sukses");
}
else{
	header("Location: daftar.php?pesan=gagal");


}
?>
