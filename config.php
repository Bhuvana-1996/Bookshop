<?php
include("db.php");
$conn = mysqli_connect("localhost","root","","bookshop");

if(!$conn){
    echo "Database Connection Failed";
}
?>