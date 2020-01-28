<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check Out</title>
    <link type="text/css" rel="stylesheet" href="/cs313/cs313_stef/week03/styles.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	

    </head>

<body>
    
    <main class="cart-page">
    
		
    
    <div class="cart-container">
		<h1 class="shopping_headline">Shopping Cart</h1>
		<p id="show-cart">
		<!-- -->	
		
		</p>
		<div>Total Cart:$<span id="total-cart"></span></div>
		<p><button onclick="clearCart()" id="clear-cart">Clear Cart</button></p>
		<p><button onclick="window.location.href = 'shopping.php';" id="">Continue Shopping</button></p>
		<p><button onclick="window.location.href = 'checkout.php';" id="">Checkout</button></p>
		</div>
		
		
		
		
		
		
    
    
    
    
    
    </main>
    <footer>
    
    </footer>

    
    </body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="shopping.js"></script>
</html>