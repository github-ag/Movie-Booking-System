<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Bollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Bollywood Movies
						<small>Now Showing</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Bollywood Movies</li>
					</ol>
				</div>
			</div>

			<!-- Movie One -->
			<div class="row">
				<div class="col-md-7">
					<a href="moviedetail.php?MovieName=Ae dil hai mushkil">
						<img class="img-responsive img-hover poster" src="img/adhm.jpg" alt="Ae Dil Hai Mushkil">
					</a>
				</div>
				<div class="col-md-5">
					<h3>Ae Dil hai Mushkil</h3>
					<h4><i class="fa fa-star"></i> 4/5</h4>
					 <p>
					 <?php
						$MovieName = 'Ae dil hai mushkil';
						include 'php\displayInfo.php'
						?>
					</p>
					<a class="btn btn-danger" href="moviedetail.php?MovieName=Ae dil hai mushkil">View Timings</a>
				</div>
			</div>
			<hr>

			<!-- Movie Two -->
			<div class="row">
				<div class="col-md-7">
					<a href="moviedetail.php?MovieName=Dil Bechara">
					<img class="img-responsive img-hover poster" src="img/dil bechara.jpg" alt="Masaan">
					</a>
				</div>
				<div class="col-md-5">
					<h3>Dil Bechara</h3>
					<h4><i class="fa fa-star"></i> 4/5</h4>
					<p>
					 <?php
						$MovieName = 'Dil Bechara';
						include 'php\displayInfo.php'
						?>
					</p>
					<a class="btn btn-danger" href="moviedetail.php?MovieName=Dil Bechara">View Timings</a>
				</div>
			</div>
			<hr>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
