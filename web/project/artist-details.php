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
      $statement = $db->prepare('SELECT artist_id, artist_name, artist_medium, artist_description FROM artists');
      $statement->execute();

    }
/*
    try {
      $statement = $db->prepare('SELECT artist_id, item, merch_size, price, quantity, merch_description FROM merchandise');
      $statement->execute();

    }
*/
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo '<strong>' . $row['artist_name'] . ' ' . $row['artist_medium'] . ':';
		echo $row['artist_description'] . '</strong>' . ' - ' . $row['item'];
		echo '<br />';

    $stmtItems = $db->prepare('SELECT artist_name FROM artists a'
			. ' INNER JOIN merchandise m ON m.artist_id = a.id'
			. ' WHERE m.artist_id = :artistId');

		$stmtItems->bindValue(':artistId', $row['id']);
		$stmtItems->execute();

		// Go through each topic in the result
		while ($itemRow = $stmtItems->fetch(PDO::FETCH_ASSOC))
		{
			echo $itemRow['name'] . ' ';
		}

		echo '</p>';
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
