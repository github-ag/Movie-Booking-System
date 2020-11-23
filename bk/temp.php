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
	echo $num_tickets;
  echo $timing;

  $MovieName = $_GET["MovieName"];
  echo $MovieName;
	//print($timing);
	?>
