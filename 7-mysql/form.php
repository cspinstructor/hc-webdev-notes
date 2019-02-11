<?php

  $link = mysqli_connect("localhost","myuser","123456","hanchiang");

  if( mysqli_connect_error() ) {
    die("Error connecting to database");
  } 

  // print_r( $_POST );
  // echo $_POST['name']."<br>";
  // echo $_POST['email']."<br>";
  // echo $_POST['password']."<br>";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // echo $name.$email.$password;

  $query = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

  if($result = mysqli_query($link, $query)) {
     
    echo "Successfully created record.";
    
  }
  
?>

<form method="post">
  <input name="name" type="text" placeholder="Enter name">
  <p> <input name="email" type="text" placeholder="Enter email"></p>
  <p> <input name="password" type="password" placeholder="Enter password"></p>
  <p> <input type="submit" value="Submit"></p>

  <?php
    echo "Hello ".$name." Thanks for submitting";
  ?>
</form>

<hr>
<p>

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