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

$sql="CREATE TABLE BOOKCOPIES (BOOKID INT(10), BRANCHID INT(10), NOOFCOPIES INT(10))";

if($conn->query($sql)===TRUE)
{
	echo"Table 'BookCopies' created sucessfully!";
}
else
{
	echo"Error creating table: " .$conn->error;
}

$conn->close();
?>