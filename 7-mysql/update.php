<?php

  $link = mysqli_connect("localhost","myuser","123456","hanchiang");

  if( mysqli_connect_error() ) {
    die("Error connecting to database");
  } 

  // $query = "UPDATE users SET email='dave@yahoo.com' WHERE name='david'";

  $query = "UPDATE users SET email='da@xyz.com', password='aabbccdd' WHERE name='david'";

  if($result = mysqli_query($link, $query)) {
    
    echo "Successfully updated.";
    
  }

?>