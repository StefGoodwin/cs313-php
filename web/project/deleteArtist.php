<?php
/*$medium = $_POST['artistMedium'];
$artDesc = $_POST['artistDescription'];
$item = $_POST['merchItem'];
$size = $_POST['merchSize'];
$quantity = $_POST['merchQuanitiy'];
$price = $_POST['merchPrice'];
$item = $_POST['merchItem'];
$merchDescr = $_POST['merchDescr'];*/
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
//use $_GET['ID'] to get id from querystring
require("dbConnect.php");


$query='DELETE FROM artists WHERE id = :id';
$stmt = $db->prepare($query);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();

//echo $stmt->rowcount();
 header('location:artist-details.php');
 die();

?>
