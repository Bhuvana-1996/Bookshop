<?php
include("../config.php");

if(isset($_POST['add']))
{
$title=$_POST['title'];
$author=$_POST['author'];
$price=$_POST['price'];
$image=$_POST['image'];

mysqli_query($conn,"INSERT INTO books(title,author,price,image)
VALUES('$title','$author','$price','$image')");
}
?>

<h2>Add Book</h2>

<form method="post">

Title:
<input type="text" name="title"><br><br>

Author:
<input type="text" name="author"><br><br>

Price:
<input type="number" name="price"><br><br>

Image Name:
<input type="text" name="image"><br><br>

<button name="add">Add Book</button>

</form>