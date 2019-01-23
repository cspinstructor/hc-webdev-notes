<?php

  $link = mysqli_connect("localhost","myuser","123456","hanchiang");

  if( mysqli_connect_error() ) {
    echo "Error connecting to database";
  } else {
    echo "Successfully connected to database";
  }


?>