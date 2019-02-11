<?php

  $link = mysqli_connect("localhost","myuser","123456","hanchiang");

  if( mysqli_connect_error() ) {
    die("Error connecting to database");
  } 

  $query = "SELECT * FROM users";

  if($result = mysqli_query($link, $query)) {
    $row = mysqli_fetch_array($result);

    // print_r($row);
    echo "Your name is: ".$row[1]."<br>and your email is: ".$row[2]."<br>and your password is: ".$row[3];
    
  }

?>