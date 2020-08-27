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

$sql="CREATE TABLE BOOKAUTHOR (BOOKID INT(10), AUTHORNAME VARCHAR(20))";

if($conn->query($sql)===TRUE)
{
	echo"Table 'BookAuthor' created sucessfully!";
}
else
{
	echo"Error creating table: " .$conn->error;
}

$conn->close();
?>