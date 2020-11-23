<?php
include 'components/header.php';
include 'components/navbar.php';

	if($_POST){
		$moviename = $_POST['movie_name'];
  	$conn = mysqli_connect("localhost","root","","bookmymovie");
		$query = "SELECT * FROM movies_1 WHERE movie_title LIKE '%$moviename%'";
		$result1 = mysqli_query($conn, $query);
		$row = $result1->fetch_assoc();

		$query2 = "SELECT * FROM movies_1 WHERE genres LIKE '%$moviename%'";
		$result2 = mysqli_query($conn, $query2);


		$flag = 0;

		if(mysqli_num_rows($result2)>0){
			$flag = 2;


		while ($row2 = $result2->fetch_assoc()) {
    	$title = $row2['movie_title'];
			echo "
			<!doctype html>
			<html lang='en'>
				<head>

					<link href='css/booknow.css' rel='stylesheet'>

					<title>BookMyMovie | Ticket Booking</title>
				</head>

				<body>



			 <div class='list-group'>



			  <a href='#' class='list-group-item list-group-item-action active'>
			    <div class='d-flex w-100 justify-content-between'>
			     <h2 class='mb-1'><strong>  $title </strong></h2>
			    </div>
			  </a>
				";
		}


		}
		else if(mysqli_num_rows($result1)>0){
			//$flag = 1;

			$title = $row['movie_title'];
			$genre = $row['genres'];
			$description = $row['movie_imdb_link'];
			$actor1 = $row['actor_1_name'];
			$actor2 = $row['actor_2_name'];
			$duration = $row['duration'];
			$director = $row['director_name'];

			echo "

			<!doctype html>
			<html lang='en'>
				<head>

					<link href='css/booknow.css' rel='stylesheet'>

					<title>BookMyMovie | Ticket Booking</title>
				</head>

				<body>



			 <div class='list-group'>



			  <a href='#' class='list-group-item list-group-item-action active'>
			    <div class='d-flex w-100 justify-content-between'>
			     <h2 class='mb-1'><strong>  $title </strong></h2>
			    </div>
			  </a>


				<a href='#' class='list-group-item list-group-item-action'>
					<div class='d-flex w-100 justify-content-between'>
					 <h3>GENRE</h3>
					 <h5 class='mb-1'> $genre </h5>
					</div>
				</a>


				<a href='#' class='list-group-item list-group-item-action'>
					<div class='d-flex w-100 justify-content-between'>
					 <h3>DURATION</h3>
					 <h5 class='mb-1'>$duration  min</h5>
					</div>
				</a>



				<a href='#' class='list-group-item list-group-item-action'>
			    <div>
					 <h3>CAST</h3>
					 <h5 class='mb-1'> $actor1 </h5>
					 <h5 class='mb-1'> $actor2 </h5>
					</div>
				</a>


				<a href='#' class='list-group-item list-group-item-action'>
					<div class='d-flex w-100 justify-content-between'>
					 <h3>DIRECTOR</h3>
					 <h5 class='mb-1'> $director</h5>
					</div>
				</a>


				<a >

						<h4 class='mb-1'> <a class='mb-1' href= '$description'> ----IMDB Link---- </a> </h4>
					</div>
			  </a>


			  </div>
			</body>
			</html>

			";

		}
}
		else{
			$errormessage .= "Not Done";
			$errormessage .= mysqli_error($conn);
		}


?>
