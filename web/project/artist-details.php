<?php
require("dbConnect.php");
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<pre>' , var_dump($_POST) , '</pre>';
*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Artist Details</title>
  </head>
  <body>
<h1>Artist Details</h2>
    <p><?php
    try {
      $statement = $db->prepare('SELECT id, artist_name, artist_medium, artist_description FROM artists');
      $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
    echo " <a href='deleteArtist.php?id=" . $row['id'] ."'>Remove Artist</a><br> "; //Link to delete artist page with id to delete
		echo '<strong>Artist: </strong> '. $row['artist_name'] . '<br><strong>Medium: </strong> ' . $row['artist_medium'] . '<br><strong>Description: </strong>' . $row['artist_description'];
    echo "<br><strong>Items: </strong>";

    $stmt = $db->prepare("SELECT item, merch_description, artist_id FROM merchandise WHERE artist_id = :artistId");

    $stmt->bindValue(':artistId', $row['id']);
		$stmt->execute();

    while ($itemRow = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			echo $itemRow['item'] . ' : ' . $itemRow['merch_description'] . ', ' . ' <br> ';
		}
		echo '</p><br />';
	}

	}

catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
/*******One of the many ways I was trying to get the update merchandise to work. I wanted it
to be able to update quantity and price for an item.


try {
  $result = 'SELECT * FROM merchandise WHERE artist_id = "$_POST[artistId]"';

  foreach ($db->query($result) as $itemsRow) {
    // code...
    if (isset($_POST['new'])) {
    	$result = $db->query('UPDATE merchandise SET price = $_POST[priceUpdated], quantity = $_POST[quantityUpdated]');
    	if(!$result) {
    		echo "Update Failed!!";
    	}
    	else {
    		echo "Item was successfully updated";
    	}


    }
  }

}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
*/
?>

        </p>
  </body>
</html>
