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

$sql="ALTER TABLE BORROWER ADD CONSTRAINT FK7 foreign key(CardNo) references BORROWER(CardNo)";

if($conn->query($sql)===TRUE)
{
	echo"Foreign key for table 'Borrower' created sucessfully!";
}
else
{
	echo"Error creating Foreign key: " .$conn->error;
}

$conn->close();
?>