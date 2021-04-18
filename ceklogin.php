<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config/koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$pilihan  = $_POST['petugas'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from petugas where username='$username' and password='$password' and role='$pilihan'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek != 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	if ($pilihan=='Admin'){
			header("Location:admin/home.php");
	}
	else if ($pilihan=='Pintu Masuk'){
			header("Location:pintumasuk/home.php");
	}
	else if ($pilihan=='Pintu Keluar'){
			header("Location:pintukeluar/home.php");
	}
	else if ($pilihan=='Petugas Parkir'){
			header("Location:petugasparkir/home.php");
	}
	else{
			header("Location:manajemen/home.php");		
	}


}else{
	//alert "LOGIN GAGAL";
	header("Location:login.php");
}
?>