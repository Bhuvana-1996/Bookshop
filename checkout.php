<?php
session_start();
?>

<h2>Checkout</h2>

<form action="payment.php" method="post">

Name:<br>
<input type="text" name="name" required><br><br>

Email:<br>
<input type="email" name="email" required><br><br>

Address:<br>
<textarea name="address" required></textarea><br><br>

Payment Method:<br>

<select name="method">
<option>Cash on Delivery</option>
<option>Credit Card</option>
<option>UPI</option>
</select>

<br><br>

<button type="submit">Place Order</button>

</form>