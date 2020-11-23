<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="bookmymovie";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  $timing=$_POST["timing"];
	$num_tickets = $_POST["num_tickets"];
	$MovieName = $_POST["MovieName"];

	echo $MovieName;

	$query = "SELECT * FROM my_bookings ";
	$result1 = mysqli_query($conn, $query);
 $count = mysqli_num_rows($result1);
 ++$count;


	if($timing==0){
		$timing = "10:00:00";
	}
	else if($timing==1){
		$timing= "12:30:00";
	}
	else if($timing==2){
		$timing="15:00:00";
	}
	else if($timing==3){
		$timing="18:00:00";
	}

	$sql = "INSERT INTO my_bookings (booking_id, movie_title, movie_timings, no_of_seats)
	VALUES ('$count', '$MovieName', '$timing', '$num_tickets')";



	if ($conn->query($sql) === TRUE) {
			echo'<script>
							alert("Booked successfully!!");

					</script>';
	}

	echo $timing;
	print($timing);
	?>












<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Booking Successful</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<?php echo $num_tickets; ?>

		<div class="container">

	    <div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">Booking Successful!</h1>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-8">
	        <h4>Your tickets have been booked :)</h4>
	        <p>Thank you for booking your movie tickets with BookMyMovie! Hope you loved your experience with us.
	        <br>BookMyMovie lets you instantly book tickets for any show within a few easy steps, and all this, anywhere anytime!</p>
	        <br>
	        <h3 class="text-success">Show your QR code or unique BMMID at the theatre Box Office to get your tickets.</h3>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-8 text-center">
	        <br>
	        <img src="img/qrcode.jpg">
	        <h3 class="text-center bold text-danger">BMMID: 3FJ95RX</h3>
	      </div>
	    </div>

	    <div>
	    <p class="spacer"></p>
	    </div>

	    <div class="row">
	      <div class="col-md-8 alert-success">
	        <p><br>Let us know how your experience with BookMyMovie was.
						Go ahead give us a <a href="contact.php" class="text-danger">feedback</a>.<br>
						Your opinion matters the most. Keep supporting! :)</p>
	      </div>
	    </div>
	    <br>

		</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
