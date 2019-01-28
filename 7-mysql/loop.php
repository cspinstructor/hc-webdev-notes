<?php

  $link = mysqli_connect("localhost","myuser","123456","hanchiang");

  if( mysqli_connect_error() ) {
    die("Error connecting to database");
  } 

  $query = "SELECT * FROM users";

  if($result = mysqli_query($link, $query)) {

    echo "<table>";
    echo "<thead>
            <tr>
              <td>Id</td>
              <td>Name</td>
              <td>Email</td>
              <td>Password</td>
            </tr>
           </thead>
           <tbody>";

    while( $row = mysqli_fetch_array($result) ) {
     echo "<tr>";
     echo "<td>".$row[0]."</td>";
     echo "<td>".$row[1]."</td>";
     echo "<td>".$row[2]."</td>";
     echo "<td>".$row[3]."</td>";
     echo "</tr>";
    }
    
    echo "</tbody></table>";

   
  }

?>