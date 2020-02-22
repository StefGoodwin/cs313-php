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

//function updateMerch($id, $artistId, $item, $size, $price, $quantity, $merchDescr) {

$statement = 'UPDATE merchandise SET id = :id, artist_id = :artist_id, item = :item, merch_size = :size, price = :price, quantity = :quantity, merch_description = :merchDescr WHERE id = :id';
$statement = $db->prepare($statement);

$statement->bindValue(':artist_id', $artistId);
$statement->bindValue(':item', $item);
$statement->bindValue(':size', $size);
$statement->bindValue(':price', $price);
$statement->bindValue(':quantity', $quantity);
$statement->bindValue(':merchDescr', $merchDescr);
$statement->bindValue(':id', $id);
$statement->execute();
$rowsChanged = $statement->rowCount();
$statement->closeCursor();
//return $rowsChanged;
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
