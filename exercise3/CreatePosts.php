<?php

$user_m = $_POST["user"];
$content_m = $_POST["content"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "blknm4598", "Nao3Uath", "blknm4598");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "<html> <head>";
echo "</head><body style='text-align:center; background:black; color:orange'>";


$query = "SELECT user_id FROM Users WHERE user_id = '$user_m'";
$search = $mysqli->query($query);


if($search->num_rows > 0)
  {
    $post_m = "INSERT INTO Posts (content, author_id) VALUES ('$content_m','$user_m')";

    $is_valid = $mysqli->query($post_m);
    if($is_valid === TRUE)
    {
      echo "Congratulations, your post was created!";
    }
  else
    {
    echo "An error occured.";
    }
}
else
{
  echo "This user does not exist";
}


echo "</body></html>";
/* close connection */
$mysqli->close();
?>