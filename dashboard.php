<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: ../login.php");
}
?>

<h1>Admin Dashboard</h1>

<a href="addbook.php">Add Book</a><br>
<a href="../logout.php">Logout</a>