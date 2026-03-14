<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Online Book Shop</title>

<style>
body{
font-family:Arial;
background:#f4f4f4;
}

.header{
background:#333;
color:white;
padding:15px;
text-align:center;
}

.container{
display:flex;
flex-wrap:wrap;
}

.book{
background:white;
width:200px;
margin:20px;
padding:15px;
text-align:center;
box-shadow:0 0 10px #ccc;
}

.book img{
width:150px;
height:200px;
}

button{
background:green;
color:white;
border:none;
padding:10px;
cursor:pointer;
}
</style>
</head>

<body>

<h1>Online Book Shopping</h1>

<a href="index.php">Home</a>|
<a href="login.php">Login</a>|
<a href="cart.php">
    <button>View Cart</button>
</a>


<hr>

<?php
$result = mysqli_query($conn,"SELECT * FROM books");

while($row = mysqli_fetch_assoc($result)){
?>

<div style="border:1px solid gray;width:200px;padding:10px;margin:10px;display:inline-block">

<img src="images/<?php echo $row['image']; ?>" width="150">

<h3><?php echo $row['title']; ?></h3>
<p>Author: <?php echo $row['author']; ?></p>
<p>Price: ₹<?php echo $row['price']; ?></p>

<form action="cart.php" method="post">
<input type="hidden" name="title" value="<?php echo $row['title']; ?>">
<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
<button type="submit">Add to Cart</button>
</form>

</div>

<?php } ?>

</body>
</html>