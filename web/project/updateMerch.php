<?php


function updateMerch($item, $merch_size, $price, $quantity, $merch_description, $id) {

}
require("dbConnect.php");

$stmt = $db->prepare('UPDATE merchandise SET item = :item, merch_size = :merch_size, price = :price, quantity = :quantity, merch_description = :merch_description WHERE id = :id');

$stmt->bindValue(':item', $item, PDO::PARAM_STR);
$stmt->bindValue(':merch_size', $merch_size, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_INT);
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
$stmt->bindValue(':merch_description', $merch_description, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
echo $stmt->rowcount();
header('location:artist-details.php');
 die();

 ?>
