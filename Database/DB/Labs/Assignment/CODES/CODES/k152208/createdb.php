<?php
$servername="localhost";
$username="k152208";
$password="tritan12";

$conn=mysqli_connect($servername, $username, $password);

if($conn->connect_error)
{
	die("Connection failed: " .$conn->connect_error);
}
echo"Connected successfully!";


$sql="CREATE DATABASE LibraryManagementSystem";

if($conn->query($sql)===TRUE)
{
	echo"Database 'LibraryManagementSystem' created sucessfully!";

else
{
	echo"Error creating database: " .$conn->error;
}

$conn->close();
?>