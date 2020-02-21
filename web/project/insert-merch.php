<?php
require("dbConnect.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<pre>' . var_dump($_POST) . '</pre>';

$artistId = $_POST['artistId'];
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



try
{
$query = 'INSERT INTO merchandise(item, merch_size, price, quantity, merch_description, artist_id) VALUES(:item, :size, :price, :quantity, :merchDescr, :artist_id)';
$statement = $db->prepare($query);

$statement->bindValue(':item', $item);
$statement->bindValue(':size', $size);
$statement->bindValue(':price', $price);
$statement->bindValue(':quantity', $quantity);
$statement->bindValue(':merchDescr', $merchDescr);
$statement->bindValue(':artist_id', $aristId);
$statement->execute();

} catch (\Exception $ex) {
  echo "Error with DB. Details: $ex";

}

//header("Location: artist-details.php");
 //die();

?>
