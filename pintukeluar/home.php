		


<!DOCTYPE html>
<html>
<head>
	<title> Petugas Masuk </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 	<link rel="shortcut icon" href="../asset/img/logo3.png">

</head>
<body>
	 	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  		<a class="navbar-brand" alt="logo" href="home.php">  		
  			<img src="../asset/img/logo.png" width="30" height="30" alt="">
  			Parkirku
		</a>


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>


	</nav>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "sukses"){?>
			<div class="alert alert-primary" role="alert">
  				Data terinput!
			</div>
<?php
		}else if($_GET['pesan'] == "gagal"){?>

			<div class="alert alert-danger" role="alert">
  				Inputan gagal!
			</div>
<?php } ?>			

<?php } ?>

		<main role="main" class="flex-shrink0">
 		<div class="container">
 			<div class="row justify-content-center mt-5">
 				<div class="col-md-4">
 					<div class="card-header bg-transparent mb-0"><h5 class="text-center">Petugas <span class="font-weight-bold text-primary">Pintu Keluar</span></h5></div> 
 					<div class="card">
 						<div class="card-body">
 							<form method="post" action="inputdata.php">
							  <div class="form-group">
							    <label>Plat Nomor: </label>
								<input type="text" class="form-control" name="platnomor" placeholder="Masukkan platnomor" id="platnomor">
							  </div>
							  <div class="form-group">
							    <label>Tanggal Keluar: </label>
								<input type="date" class="form-control" name="tanggalkeluar">

							  </div>
							  <div class="form-group">
							    <label>Waktu Keluar: </label>
								<input type="time" name="waktukeluar" class="form-control">
							  </div>
							  <button type="submit" class="btn btn-primary" name="submit">Masukkan</button>
							<a type="button" href="../index.php" class="btn btn-white" name="kembali">Logout</a>

							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</main>
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
</html>