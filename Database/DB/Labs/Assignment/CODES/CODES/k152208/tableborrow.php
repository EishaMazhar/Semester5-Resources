<?php
$servername="localhost";
$username="k152208";
$password="tritan12";
$dbname="LibraryManagementSystem";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
	die("Connection failed: " .$conn->connect_error);
}
echo"Connected successfully!  ";

$sql="CREATE TABLE BORROWER (CARDNO INT(10) PRIMARY KEY, NAME VARCHAR(20), ADDRESS VARCHAR(20), PHONE INT(10))";

if($conn->query($sql)===TRUE)
{
	echo"Table 'Borrower' created sucessfully!";
}
else
{
	echo"Error creating table: " .$conn->error;
}

$conn->close();
?>