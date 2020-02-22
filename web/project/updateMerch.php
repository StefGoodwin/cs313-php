<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<pre>' , var_dump($_POST) , '</pre>';
require("dbConnect.php");

$artistId = $_POST['artistId'];
$item = $_POST['merchItem'];
$size = $_POST['merchSize'];
$quantity = $_POST['merchQuanitiy'];
$price = $_POST['merchPrice'];
$item = $_POST['merchItem'];
$merchDescr = $_POST['merchDescr'];

try {
$stmt = $db->prepare('UPDATE merchandise SET item = :item, merch_size = :merch_size, price = :price, quantity = :quantity, merch_description = :merch_description WHERE artist_id = :artist_id');

$statement->bindValue(':item', $item);
$statement->bindValue(':size', $size);
$statement->bindValue(':price', $price);
$statement->bindValue(':quantity', $quantity);
$statement->bindValue(':merchDescr', $merchDescr);
$statement->bindValue(':artist_id', $artistId);
$stmt->execute();
echo $stmt->rowcount();

}
catch (\Exception $e) {
  echo "Error with DB. Details: $e";
}
/*
header('location: artist-details.php');
 die();
*/
 ?>
