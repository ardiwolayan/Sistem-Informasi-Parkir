<!DOCTYPE html>
 <html>
 <head>
 	<title> Laporan Parkir </title>
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
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ruang Parkir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tambahruangparkir.php">Tambah Ruang Parkir</a>
          <a class="dropdown-item" href="dataruangparkir.php">Data Ruang Parkir</a>
      </li>


      
      <li class="nav-item">
        <a class="nav-link" href="ruangparkir.php">Ruang Parkir</a>
      </li>
 -->

<!--  	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data Parkir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mobilmasuk.php">Mobil Masuk</a>
          <a class="dropdown-item" href="mobilkeluar.php">Mobil Keluar</a>
      </li>
 --><!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Keluar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tambah Ruang Parkir</a>
          <a class="dropdown-item" href="#">Data Ruang Parkir</a>
      </li>
 -->
<!--       <li class="nav-item">
        <a class="nav-link" href="ruangparkir.php">Ruang Parkir</a>
      </li>
 -->
    </ul>
  </div>
</nav>
<!-- End Navbar -->


 	<main role="main" class="flex-shrink0">
 		<div class="container">
 			<div class="row">
 				<div class="col-12">
 					<div class="card">
 						<div class="card-header">
 							<h1 class="text-center">Laporan</h1>
<!--  							<a class="btn btn-primary align-left" href="home.php"> Kembali </a>
 --> 						</div>
 						<div class="card-body">
 							<table class="table">
			<thead class="thead-dark">
			    <tr>
					<th class="text-center" scope="col">Plat Nomor</th>
					<th class="text-center" scope="col">Lama Menginap</th>
		            <th class="text-center" scope="col">Total Biaya</th>
			    </tr>
			  </thead>
			  <tbody>
	<?php 
	$platnomor=$_GET['platnomor'];
    
    include "../config/koneksi.php";
    
    //untuk mencari selisih hari
    $data2 = mysqli_query($koneksi, "SELECT datediff(`tanggalkeluar`, `tanggalmasuk`) as selisih FROM datamobil where platnomor='$platnomor'");
    $data = mysqli_query($koneksi, "SELECT case when datediff(`tanggalkeluar`, `tanggalmasuk`)>0 then (datediff(`tanggalkeluar`, `tanggalmasuk`)*100000)+(datediff(`tanggalkeluar`, `tanggalmasuk`)*3000) when datediff(`tanggalkeluar`, `tanggalmasuk`)=0 then datediff(`tanggalkeluar`, `tanggalmasuk`)+3000 end as bayar FROM datamobil where platnomor='$platnomor'");
    // $data3=mysqli_query($koneksi, "SELECT CASE WHEN datediff(`tanggalkeluar`, `tanggalmasuk`)>0 THEN (COUNT(datediff(`tanggalkeluar`, `tanggalmasuk`))*100000)+(COUNT(datediff(`tanggalkeluar`, `tanggalmasuk`))*3000) WHEN datediff(`tanggalkeluar`, `tanggalmasuk`)=0 THEN COUNT(datediff(`tanggalkeluar`, `tanggalmasuk`))*3000 END AS totalpendapatan FROM datamobil");
    // $data3= mysqli_query($koneksi, "SELECT tanggalmasuk, tanggalkeluar, COUNT(datediff(`tanggalkeluar`, `tanggalmasuk`)) as menginap FROM datamobil WHERE datediff(`tanggalkeluar`, `tanggalmasuk`)>0 GROUP BY tanggalkeluar");
    $hasill=0;
    $no = 1;
    $d2 = mysqli_fetch_array($data2);
    $d1 = mysqli_fetch_array($data);
      ?>
	    <tr>
        <td class="text-center"><?php echo $platnomor; ?></td>

        <td class="text-center"><?php  
        if ($d2['selisih'] == "0"){
          echo "0";
        }else{
        echo $d2['selisih'];

        }
        ?></td>

        <td class="text-center"><?php 
                	echo $d1['bayar'];        	
        


       
        ?>



</td>
<!--         <td class="text-center"><?php echo $d2['selisih']; ?></td> -->
      </tr>
			  </tbody>
			</table>
							<a type="button" href="home.php" class="btn btn-primary" name="kembali">Back</a>

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