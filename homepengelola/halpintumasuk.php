<?php 

session_start();

echo "<p>Halo Petugas Pintu Masuk ".$_SESSION['username']."</p>"; 
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title> User </title>
 </head>
 <body>
 	<br>
 <a href="../index.php"> Logout </a>
 </body>
 </html>