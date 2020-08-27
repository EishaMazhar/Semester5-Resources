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

$sql="CREATE TABLE BOOKLOANS (BOOKID INT(10), BRANCHID INT(10), CARDNO INT(10), DATEOUT DATE, DATEDUE DATE);";

if($conn->query($sql)===TRUE)
{
	echo"Table 'BookLoans' created sucessfully!";
}
else
{
	echo"Error creating table: " .$conn->error;
}

$conn->close();
?>