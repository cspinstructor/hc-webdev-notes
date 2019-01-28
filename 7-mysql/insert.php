<?php

  $link = mysqli_connect("localhost","myuser","123456","hanchiang");

  if( mysqli_connect_error() ) {
    die("Error connecting to database");
  } 

  $query = "INSERT INTO users(name,email,password) VALUES('david','david@gmail.com','667789')";

  if($result = mysqli_query($link, $query)) {
     //$row = mysqli_fetch_array($result);

    // print_r($row);
    echo "Successfully created record.";
    
  }

?>