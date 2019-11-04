<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "blknm4598", "Nao3Uath", "blknm4598");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "<html> <head>";
echo "</head><body style='text-align:center; background:black; color:orange'>";


$query = "SELECT * FROM Users";

if($roster = $mysqli->query($query))
{

  echo 'List of Users<br>';
  while($row = $roster->fetch_assoc())
  {
    $user = $row["user_id"];
    echo "$user <br>";
  }
}

echo "</body></html>";
/* close connection */
$mysqli->close();
?>