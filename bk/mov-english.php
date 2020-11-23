<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Hollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">Hollywood Movies
	          <small>Now Showing</small>
	        </h1>
	        <ol class="breadcrumb">
	          <li><a href="index.php">Home</a></li>
	          <li class="active">Hollywood Movies</li>
	        </ol>
	      </div>
	    </div>

	    <!-- Movie One -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Avatar">
	          <img class="img-responsive img-hover poster" src="img/post-avatar.jpg" alt="Avatar">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Avatar</h3>
	        <h4><i class="fa fa-star"></i> 5/5</h4>
	        <p>
					 <?php
	          $MovieName = 'Avatar';
	          include 'php\displayInfo.php'
	          ?>
					</p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Avatar">View Timings</a>
	      </div>
	    </div>
	    <hr>

	    <!-- Movie Two -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Avengers">
	          <img class="img-responsive img-hover poster" src="img/post-avengers.jpg" alt="Avengers-Age of Ultron">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Avengers-Age of Ultron</h3>
	        <h4><i class="fa fa-star"></i> 5/5</h4>
	        <p>
	        <?php
	          $MovieName = "Avengers";
	          include 'php\displayInfo.php'
	          ?>
	        </p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Avengers">View Timings</a>
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
