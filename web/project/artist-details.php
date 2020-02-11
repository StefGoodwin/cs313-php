<?php
require('dbConnect.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <p><?php
    $statement = $db->prepare("SELECT artist_name, artist_medium, artist_description FROM artists, merchandise WHERE artist.id=merchandise.id");
    $statement->execute();

      while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
  	// The variable "row" now holds the complete record for that
  	// row, and we can access the different values based on their
  	// name
  	$artist = $row['artist_name'];
  	$medium = $row['artist_medium'];
  	$description = $row['artist_description'];


  	echo "<p><strong>$artist $medium </strong> - \"$description\"<p>";
  }
            ?>
        </p>
  </body>
</html>
