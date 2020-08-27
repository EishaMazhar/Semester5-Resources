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

$sql="ALTER TABLE BOOKLOANS ADD CONSTRAINT PK3 PRIMARY KEY (BOOKID, BRANCHID, CARDNO)";

if($conn->query($sql)===TRUE)
{
	echo"Primary key for table 'BookLoans' created sucessfully!";
}
else
{
	echo"Error creating Primary key: " .$conn->error;
}

$conn->close();
?>