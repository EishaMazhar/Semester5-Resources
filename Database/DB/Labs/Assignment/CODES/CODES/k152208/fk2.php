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

$sql="ALTER TABLE PUBLISHER ADD CONSTRAINT FK2 FOREIGN KEY (NAME) REFERENCES BOOK(PUBLISHERNAME)";

if($conn->query($sql)===TRUE)
{
	echo"Foreign key for table 'Publisher' created sucessfully!";
}
else
{
	echo"Error creating Foreign key: " .$conn->error;
}

$conn->close();
?>