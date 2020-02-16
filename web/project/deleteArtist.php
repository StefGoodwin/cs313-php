<?php
$id = $_POST['ID'];
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
require("dbConnect.php");

$query='DELETE * FROM artists WHERE ID = ?';
$db->prepare($query)->execute([$_POST['ID']]);

header('location:artist-details.php');
die();

?>
