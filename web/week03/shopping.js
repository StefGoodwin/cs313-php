

$(".add-to-cart").click(function(event){
	event.preventDefault();
	var name = $(this).attr("data-name");
	var price = Number($(this).attr("data-price"));
	
	addToCart(name, price, 1);
	displayCart();
});

$("#clear-cart").click(function(event){
	clearCart();
	displayCart();
	saveCart();
});

function displayCart(){
	var cartArray = listCart();
	var output = "";
	for (var i in cartArray) {
		output += "<p>"+cartArray[i].name
			+" "
			+cartArray[i].count+" x "+cartArray[i].price
			+" = "+cartArray[i].total
			+" <button class='delete-item' data-name='"
			+cartArray[i].name+"'>Delete Item</button>"
			+"</p>";
	}
	$("#show-cart").html(output);
	$("#total-cart").html( totalCart() );
	}
$("#show-cart").on("click", ".delete-item", function(event) {
	var name = $(this).attr("data-name");
	removeAllItems(name);
	displayCart();	
});

//*******************************
// Shopping Cart functions
var cart = [];
//name, price, count

var Item = function(name, price, count) {
	this.name = name
	this.price = price
	this.count = count
	
};
//addToCart(name, price, count)

function addToCart(name, price, count) {
	for (var i in cart) {
		if (cart[i].name === name) {
			cart[i].count += count;
			saveCart();
			return;
		}
		
	}
	var item = new Item(name, price, count);
	cart.push(item);
	saveCart();
	
}

function removeFromCart(name) {
	for (var i in cart) {
		if (cart[i].name === name) {
			cart[i].count --;
			if (cart[i].count === 0) {
				cart.splice(i, 1);
			}
			break;
		}
	}
	saveCart();
}


function removeAllItems(name) {
	for (var i in cart) {
		if (cart[i].name === name) {
			cart.splice(i, 1);
			break;
		}
	}
	saveCart();
}


function clearCart() {
	cart = [];
	saveCart();
}

function countCart() {
	var totalCount = 0;
	for (var i in cart) {
		totalCount += cart[i].count;
		}
	return totalCount;
}

	// totalCount; count in cart

function totalCart() {
	var totalCost = 0;
	for (var i in cart){
		totalCost += cart[i].price * cart[i].count;
	}
	return totalCost.toFixed(2);
	
}

console.log( totalCart() );



function listCart() { //-> array of Item-> HTML to display
	var cartCopy = [];
	for (var i in cart){
		var item = cart[i];
		var itemCopy = {};
		for (var p in item) {
			itemCopy[p] = item[p];
		}
		itemCopy.total = (item.price * item.count).toFixed(2);
		cartCopy.push(itemCopy);
	}
	return cartCopy;
	
}


 function saveCart() {
	 localStorage.setItem("shoppingCart", JSON.stringify(cart));
 }

function loadCart() {
	cart = JSON.parse(localStorage.getItem("shoppingCart"));
	
}
loadCart();
displayCart();

