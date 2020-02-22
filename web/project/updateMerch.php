<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<pre>' , var_dump($_POST) , '</pre>';
require("dbConnect.php");

$id = $_POST['id'];
$artistId = $_POST['artistId'];
$item = $_POST['merchItem'];
$size = $_POST['merchSize'];
$quantity = $_POST['merchQuanitiy'];
$price = $_POST['merchPrice'];
$item = $_POST['merchItem'];
$merchDescr = $_POST['merchDescr'];

try {
$statement = 'UPDATE merchandise SET artist_id = :artist_id, item = :item, merch_size = :size, price = :price, quantity = :quantity, merch_description = :merchDescr WHERE id = :id';
$statement = $db->prepare($statement);

$statement->bindValue(':artist_id', $artistId);
$statement->bindValue(':item', $item);
$statement->bindValue(':size', $size);
$statement->bindValue(':price', $price);
$statement->bindValue(':quantity', $quantity);
$statement->bindValue(':merchDescr', $merchDescr);
$statement->bindValue(':id', $id);
$statement->execute();

}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
}
/*
header('location: artist-details.php');
 die();
*/
 ?>
