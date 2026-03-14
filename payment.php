<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$method = $_POST['method'];

$total = 0;

if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $item){
$total += $item['price'];
}
}

?>

<h2>Payment Successful</h2>

<p>Thank you <b><?php echo $name; ?></b></p>

<p>Your order has been placed.</p>

<p>Total Amount: ₹<?php echo $total; ?></p>

<p>Payment Method: <?php echo $method; ?></p>

<br>

<a href="index.php">Continue Shopping</a>

<?php
unset($_SESSION['cart']);
?>