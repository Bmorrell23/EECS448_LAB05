<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "blknm4598", "Nao3Uath", "blknm4598");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$user_m = $_POST["user"];

echo "<html> <head>";
echo "</head><body style='text-align:center; background:black; color:orange'>";

echo "<br>";
echo $user_m;
echo "<br><br>";

$query = "SELECT * FROM Posts WHERE author_id='$user_m'";

if ($table_m = $mysqli->query($query)) {
  while ($row = $table_m->fetch_assoc()) {
    $postID_m= $row["post_id"];
    $content_m = $row["content"];
    echo "Post_id: " . $postID_m . "<br>";
    echo "Content: " . $content_m . "<br><br><br>";
  }
  $table_m->free();
  echo "</body></html>";
}
/* close connection */
$mysqli->close();
?>