<!DOCTYPE html>
 <html>
 <head>
 	<title> Edit Ruang Parkir </title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  	<link rel="shortcut icon" href="../asset/img/logo3.png">

 </head>
 <body>
 	<!-- Start Navbar  -->
 	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="home.php"><img src="../asset/img/logo.png" width="30" height="30">Parkirku</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<!-- End Navbar -->
<?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "hapussukses"){?>
      <div class="alert alert-primary" role="alert">
          Hapus sukses!
      </div>
<?php
    }else if($_GET['pesan'] == "hapusgagal"){?>

      <div class="alert alert-danger" role="alert">
          Hapus gagal!
      </div>
<?php }
    if($_GET['pesan'] == "suksestambah"){?>
      <div class="alert alert-primary" role="alert">
          Penambahan slot sukses!
      </div>
<?php
    }else if($_GET['pesan'] == "suksesgagal"){?>

      <div class="alert alert-danger" role="alert">
          Penambahan slot gagal!
      </div>
<?php } ?>
<?php } ?>





 	<main role="main" class="flex-shrink0">
 		<div class="container">
 			<div class="row">
 				<div class="col-12">
 					<div class="card">
 						<div class="card-header">
 							<h1 class="text-center">Edit Ruang Parkir</h1>
<!--  							<a class="btn btn-primary align-left" href="home.php"> Kembali </a>
 --> 						</div>
 						<div class="card-body">
 							<table class="table">
			<thead class="thead-dark">
			    <tr>
					<th scope="col" class="text-center">No</th>
					<th scope="col" class="text-center">Kode Tempat</th>
					<th scope="col" class="text-center">Opsi</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
		include "../config/koneksi.php";
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tempat order by tempat ASC");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td scope="row" class="text-center"><?php echo $no++; ?></td>
				<td class="text-center"><?php echo $d['tempat']; ?></td>
				<td>
					<a href="editslotparkir.php?id=<?php echo $d['id']; ?>" ><center>Edit</a></center>
					<a href="hapusslotparkir.php?id=<?php echo $d['id']; ?>" ><center>Hapus</a></center>
				</td>
			</tr>
			<?php 
		}
		?>
			  </tbody>
			</table>
							<br>
 							<a type="botton" class="btn btn-primary" href="ruangparkir.php" style="float: left;" > Kembali </a>
 							<a type="botton" class="btn btn-primary" href="tambahruangparkir.php" style="float: right;"> Tambah Slot</a>

 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</main>

	
    
    
</table>
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