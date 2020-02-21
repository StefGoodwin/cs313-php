<?php
$artist = $_POST['artistName'];
$medium = $_POST['artistMedium'];
$artDesc = $_POST['artistDescription'];
$item = $_POST['merchItem'];
$size = $_POST['merchSize'];
$quantity = $_POST['merchQuanitiy'];
$price = $_POST['merchPrice'];
$item = $_POST['merchItem'];
$merchDescr = $_POST['merchDescr'];
/*
echo "artist =$artist\n";
echo "medium =$medium\n";
echo "artDesc =$artDesc\n";
echo "item =$item\n";
echo "size =$size\n";
echo "quantity =$quantity\n";
echo "price =$price\n";
echo "item =$item\n";
echo "merchDescr =$merchDescr\n";
*/
require("dbConnect.php");

try
{
$query = 'INSERT INTO artists(artist_name, artist_medium, artist_description) VALUES(:artist, :medium, :artDesc)';
$statement = $db->prepare($query);

$statement->bindValue(':artist', $artist);
$statement->bindValue(':medium', $medium);
$statement->bindValue(':artDesc', $artDesc);
$statement->execute();
}
catch (\Exception $e) {
  echo "Error with DB. Details: $e";
}


header("Location: artist-details.php");
 die();

?>
