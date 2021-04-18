<?php 

session_start();

//echo "<p>Halo Admin ".$_SESSION['username']."</p>"; 
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Halaman Admin </title>
 </head>
	<h1>Selamat Datang, Admin <?= $_SESSION['username'] ?> </h1>
 <body>
 	
 	<br>
 <a href="../index.php"> Logout </a>
 </body>
 </html>