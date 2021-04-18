<!DOCTYPE html>
 <html>
 <head>
 	<title> Pengelola </title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 	<link rel="shortcut icon" href="asset/img/logo3.png">

 </head>
 <body>
 	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  		<a class="navbar-brand" alt="logo" href="index.php">  		
  			<img src="asset/img/logo.png" width="30" height="30" alt="">
  			Parkirku
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
  			<ul class="navbar-nav">
	      		<li class="nav-item active">
	        	<a class="nav-link" href="informasi.php">Informasi Ruang Parkir</a>
	      		</li>
      		</ul>
	    		<ul class="navbar-nav">
	      		<li class="nav-item">
	        	<a class="nav-link" href="login.php">Login Petugas</a>
    	  		</li>
	      	</ul>
      </div>

	</nav>
<main>
<body>






<!--  	<main role="main" class="flex-shrink0">
    <div class="row justify-content-center mt-5">
 		<div class="container">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1 class="text-center">Informasi Parkirku</h1> -->
<!--                <a class="btn btn-primary align-left" href="home.php"> Kembali </a>-->
<!--             </div> -->
  <main role="main" class="flex-shrink0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <br>
          <br>
          Biaya perhari = <strong>Rp 3000</strong>
          <br>
          Jika menginap, dikenakan denda <strong>Rp 100.000</strong>
<?php 
    include "config/koneksi.php";
    $no = 0;
    $dataa = mysqli_query($koneksi,"SELECT COUNT(id)-SUM(platnomor!='') as slot FROM tempat");
            $d = mysqli_fetch_array($dataa);
            ?>
            <p><strong>Slot Kosong = </strong> <?php echo $d['slot']; ?></p>
<!--               <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
              <div class="card-header">Slot Kosong: </div>
              <div class="card-body">
              <h5 class="card-title"></h5> -->
              <!--     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
<!--              </div>
              </div> -->
<!--               </div>
              </div> -->
              <?php
                  $no = 1;
    $dataa = mysqli_query($koneksi,"select id from tempat");
    while($mx = mysqli_fetch_array($dataa)){
            // $no = 1;
    // $x = mysqli_query($koneksi,"select * from tempat");
    // while($xx = mysqli_fetch_array($x)){

            $data = mysqli_query($koneksi, "select * from datamobil join tempat  on datamobil.platnomor=tempat.platnomor where tempat='$no'"
          );
            // menghitung jumlah data yang ditemukan

            $d = mysqli_fetch_array($data);
            $cek = mysqli_num_rows($data);
            if($cek != 0 ){?>
<!--           <div class="row justify-content-center mt-5">
          <div class="col-md-12"> -->
              <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
              <div class="card-header"><?php echo $no; ?></div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $d['platnomor']; ?></h5>
              <!--     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
<!--              </div>
              </div> -->
              </div>
              </div>
            <?php 
            }else {?>
<!--         <div class="row justify-content-center mt-5">
        <div class="col-md-12"> -->

              <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header"><?php echo $no; ?></div>
              <div class="card-body">
                  <h5 class="card-title">Kosong</h5>
              <!--     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
<!--              </div>
              </div> -->
              </div>
              </div>
            <?php }
            $no++;
            } ?>

<!-- </div>
</div>
</div>
</div>

    </div>
      </div> -->
<!--   </main> -->

</div>
</div>
</div>
</main>
 </body>
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
 </html>	
</main>