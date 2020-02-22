<?php
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

$stmt->bindValue(':item', $item, PDO::PARAM_STR);
$stmt->bindValue(':merch_size', $merch_size, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_INT);
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
$stmt->bindValue(':merch_description', $merch_description, PDO::PARAM_STR);
$statement->bindValue(':artist_id', $artist_Id);
$stmt->execute();
echo $stmt->rowcount();

}
catch (\Exception $e) {
  echo "Error with DB. Details: $e";
}
header('location:artist-details.php');
 die();

 ?>
