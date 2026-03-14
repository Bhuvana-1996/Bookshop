<?php
session_start();
include("config.php");

if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$result=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($result)>0){
$_SESSION['user']=$username;
header("Location: index.php");
}else{
echo "Invalid Login";
}
}
?>

<form method="post">

<h2>Login</h2>

Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<button name="login">Login</button>

</form>