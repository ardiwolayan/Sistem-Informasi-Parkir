<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 	<link rel="shortcut icon" href="../asset/img/logo3.png">

</head>
 <body>
	<main role="main" class="flex-shrink0">
 		<div class="container">
 			<div class="row justify-content-center mt-5">
 				<div class="col-md-4">
 					<div class="card-header bg-transparent mb-0"><h5 class="text-center">Edit <span class="font-weight-bold text-primary">Slot Parkir</span></h5></div> 
 					<div class="card">
 						<div class="card-body">
							<?php
							include '../config/koneksi.php';
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"select * from tempat where id='$id'");
							while($d = mysqli_fetch_array($data)){
								?>

 							<form method="post" action="updateslotparkir.php">
							  <div class="form-group">
							    <label>Kode Tempat</label>
									<input type="hidden" name="id" value="<?php echo $d['id']; ?>" id="id">
							    <input type="text" class="form-control" name="tempat" value="<?php echo $d['tempat']; ?>">
							  </div>
							  <button type="submit" class="btn btn-primary" name="submit">Ganti</button>
							<a type="button" href="editruangparkir.php" class="btn btn-white" name="kembali">Kembali</a>

							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</main>



		<?php 
	}
	?>
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