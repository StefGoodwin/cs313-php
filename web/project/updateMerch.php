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

$stmt = $db->prepare($stmt);
$statement->bindValue(':artist_id', $artistId, PDO::PARAM_INT);
$statement->bindValue(':item', $item, PDO::PARAM_STR);
$statement->bindValue(':size', $size, PDO::PARAM_STR);
$statement->bindValue(':price', $price, PDO::PARAM_INT);
$statement->bindValue(':quantity', $quantity, PDO::PARAM_INT);
$statement->bindValue(':merchDescr', $merchDescr, PDO::PARAM_STR);
$stmt->execute();

}
catch (\Exception $e) {
  echo "Error with DB. Details: $e";
}
/*
header('location: artist-details.php');
 die();
*/
 ?>
