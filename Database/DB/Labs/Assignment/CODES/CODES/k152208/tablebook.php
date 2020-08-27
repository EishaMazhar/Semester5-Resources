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

$sql="CREATE TABLE BOOK (BOOKID INT(10) PRIMARY KEY, TITLE VARCHAR(20), PUBLISHERNAME VARCHAR(20))";

if($conn->query($sql)===TRUE)
{
	echo"Table 'Book' created sucessfully!";
}

else
{
	echo"Error creating table: " .$conn->error;
}

$conn->close();
?>