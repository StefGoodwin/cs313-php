<?php
require("dbConnect.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<pre>' , var_dump($_POST) , '</pre>';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Artist Details</title>
  </head>
  <body>

    <p><?php
    try {
      $statement = $db->prepare('SELECT a.id, a.artist_name, a.artist_medium, a.artist_description, m.item FROM artists AS a
                                 INNER JOIN merchandise AS m ON a.id = m.artist_id');
      $statement->execute();


/*
    try {
      $statement = $db->prepare('SELECT id, item, merch_size, price, quantity, merch_description FROM merchandise');
      $statement->execute();

    }
*/
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo '<strong>Artist: </strong> '. $row['artist_name'] . '<br><strong>Medium: </strong> ' . $row['artist_medium'] . '<br><strong>Description: </strong>';
		echo $row['artist_description'] . '';
    //echo " <a href='deleteArtist.php?id=" . $row['id'] ."'>Delete</a> "; //Link to delete artist page with id to delete
    echo "<br><strong>Items: </strong>{$row['item']}";
		echo '</p><br />';

	}

}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
  /*   ($db->query('SELECT artist_id, artist_name, artist_medium, artist_description FROM artists WHERE artist_id = ' . $_GET['artist_id'])  AS $row) {

      echo $row['artist_name'] . " " . $row['artist_medium'] . " " . $row['artist_description'];

    }*/
?>

        </p>
  </body>
</html>
