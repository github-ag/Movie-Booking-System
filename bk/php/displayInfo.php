<?php

  $conn = mysqli_connect("localhost","root","","bookmymovie");
$query = "SELECT * FROM movies_1 WHERE movie_title LIKE '%$MovieName%'";
if(mysqli_query($conn, $query)){
   $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $s=$row['movie_imdb_link'];
}
  echo  " <h4 class='mb-1'> <a class='mb-1' href= '$s'> ----IMDB Link---- </a> </h4>";

  mysqli_close($conn);

?>
