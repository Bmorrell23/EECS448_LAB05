<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "blknm4598", "Nao3Uath", "blknm4598");

$posts_m = $_POST["post_table"];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "<html> <head>";
echo "</head><body style='text-align:center; background:black; color:orange'>";

echo "<br><br>";

if(!empty($posts_m))
{
  $d = count($posts_m);
  echo "You deleted " . $d . " spooky post(s)<br>";
  for($k = 0; $k < $d; $k++)
  {
    $query = "DELETE FROM Posts WHERE post_id = '" . $posts_m[$k] . "'";
    if ($is_valid = $mysqli->query($query))
    {
      echo $posts_m[$k] . "<br>";
    }
    else
    {
      echo "Error cannot delete spooky post:  " . $posts_m[$k] . " Please try again<br>";
    }
  }
}
echo "</body></html>";
/* close connection */
$mysqli->close();
?>