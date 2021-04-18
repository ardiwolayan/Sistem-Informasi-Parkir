

 <!DOCTYPE html>
 <html>
 <head>
 	<title> Data Mobil Masuk </title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 	<link rel="shortcut icon" href="../asset/img/logo3.png">


 </head>
 <body>
 	<!-- Start Navbar  -->
 	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="home.php"><img src="../asset/img/logo.png" width="30" height="30"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="datapetugas.php">Data Petugas</a>
      </li>
<!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ruang Parkir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tambahruangparkir.php">Tambah Ruang Parkir</a>
          <a class="dropdown-item" href="dataruangparkir.php">Data Ruang Parkir</a>
      </li>-->      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data Parkir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mobilmasuk.php">Mobil Masuk</a>
          <a class="dropdown-item" href="mobilkeluar.php">Mobil Keluar</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="ruangparkir.php">Ruang Parkir
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- End Navbar -->
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "sukses"){?>
			<div class="alert alert-primary" role="alert">
  				Perubahan berhasil!
			</div>
<?php
		}else if($_GET['pesan'] == "gagal"){?>

			<div class="alert alert-danger" role="alert">
  				Perubahan gagal!
			</div>
<?php } ?>			

<?php } ?>
		


 	<main role="main" class="flex-shrink0">
 		<div class="container">
 			<div class="row">
 				<div class="col-12">
 					<div class="card">
 						<div class="card-header">
 							<h1 class="text-center">Mobil Masuk</h1>
<!--  							<a class='btn btn-primary center-block' href="home.php"> Kembali </a>
 							<p type="button" class="btn btn-primary" class="text-right" style="float: right;"
 								>Tambah Petugas</p>
 
 --><!-- <button type='button' class='btn btn-primary center-block'> Klik Disini</button>--> 						</div>
				<div class="card-body">
 							<table class="table">
			<thead class="thead-dark">
			    <tr>
					<th class="text-center" scope="col">No</th>
					<th class="text-center" scope="col">Plat</th>
					<th class="text-center" scope="col">Tanggal</th>
					<th class="text-center" scope="col">Waktu</th>
					<th class="text-center" scope="col">Opsi</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
			  
		include "../config/koneksi.php";
		$no = 1;
		$data = mysqli_query($koneksi,"select * from datamobil where tanggalmasuk!='' && waktumasuk!='' ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td class="text-center" scope="row"><?php echo $no++; ?></td>
				<td class="text-center"><?php echo $d['platnomor']; ?></td>
				<td class="text-center"><?php echo $d['tanggalmasuk']; ?></td>
				<td class="text-center"><?php echo $d['waktumasuk']; ?></td>
				<td>
					<a href="editmm.php?id=<?php echo $d['id']; ?>"><center>Edit</a></center>
					<a href="hapusmm.php?id=<?php echo $d['id']; ?>"><center>Hapus</a></center>
				</td>
			</tr>
			<?php 
		}
		?>
			  </tbody>
			</table>
<!-- 			 			<a type="botton" class="btn btn-primary" href="daftar.php" style="float: left;" href="daftar.php"> Tambah Mobil </a>
 -->
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