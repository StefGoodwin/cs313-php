<?php

$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);
$card = htmlspecialchars($_POST["card"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>
	<h1>Receipt</h1>

	<p>Thank you for your purchase <?=$name ?></p>
	<p>Your purchase will be shipped to <?=$address ?></p>
	<div id="receipt"><p id="show-cart">
		<!-- -->	
		
		</p></div>
	<p>Your <?=$card ?> will be charged $<span id="total-cart"></span></p>
	
	



</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="shopping.js"></script>
</html>