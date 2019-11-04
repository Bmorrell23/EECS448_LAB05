<?php

$user_m = $_POST["user"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "blknm4598", "Nao3Uath", "blknm4598");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "<html> <head>";
echo "</head><body style='text-align:center; background:black; color:orange'>";


$query = "INSERT INTO Users (user_id) VALUES ('" . $user_m . "')";


if ($mysqli->query($query) === TRUE) {
    echo "New record created successfully.  Your username is " . $user_m;
} else if($query === ""){
   echo "Please enter a valid user id!!";
  }
  else {
    echo "This user id already exists. Please try again.";
  }


echo "</body></html>";
/* close connection */
$mysqli->close();
?>