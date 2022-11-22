<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','freepass');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


// database insert SQL code
$sql = "INSERT INTO `user` (`Name`, `Email`, `Phone`) VALUES ('$name', '$email', '$phone')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>