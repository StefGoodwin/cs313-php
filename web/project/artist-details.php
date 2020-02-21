<?php
require("dbConnect.php");

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
      $statement = $db->prepare('SELECT id, artist_name, artist_medium, artist_description FROM artists');
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
		echo '</p><br />';

    $stmtItems = $db->prepare("SELECT item FROM merchandise AS m
                               INNER JOIN artists AS a ON a.id = m.artist_id
                               WHERE id = $row['id']");

    $stmtItems->bindValue(':artistId', $row['id']);
    $stmtItems->execute();


    while ($itemRow = $stmtItems->fetch(PDO::FETCH_ASSOC))
    {
      echo $itemRow['item'] . ', ';
    }

    echo '</p>';
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
