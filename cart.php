<?php
session_start();

# Add item to cart
if(isset($_POST['title'])){
$_SESSION['cart'][] = array(
"title"=>$_POST['title'],
"price"=>$_POST['price']
);
}

# Remove item from cart
if(isset($_GET['remove'])){
$index = $_GET['remove'];
unset($_SESSION['cart'][$index]);
$_SESSION['cart'] = array_values($_SESSION['cart']); // reset index
}

# clear item from cart
if(isset($_GET['clear'])){

unset($_SESSION['cart']);
}
?>

<h2>Your Cart</h2>

<table border="1" cellpadding="10">

<tr>
<th>Book</th>
<th>Price</th>
<th>Action</th>
</tr>

<?php

$total = 0;

if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $key => $item){

echo "<tr>";
echo "<td>".$item['title']."</td>";
echo "<td>".$item['price']."</td>";
echo "<td><a href='cart.php?remove=".$key."'>Remove</a></td>";
echo "</tr>";

$total += $item['price'];

}
}
?>

<tr>
<td><b>Total</b></td>
<td><b><?php echo $total; ?></b></td>
<td></td>
</tr>

</table>

<br>

<a href="cart.php?clear=true">
<button>Clear Cart</button>
</a>

<br><br>

<a href="checkout.php">
<button>Proceed to Payment</button>
</a>

<br><br>

<a href="index.php">Continue Shopping</a>