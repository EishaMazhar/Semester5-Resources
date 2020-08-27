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

$sql="ALTER TABLE LIBRARYBRANCH ADD CONSTRAINT FK6 FOREIGN KEY (BRANCHID) REFERENCES BOOKLOANS(BRANCHID);";

if($conn->query($sql)===TRUE)
{
	echo"Foreign key for table 'LibraryBranch' created sucessfully!";
}
else
{
	echo"Error creating Foreign key: " .$conn->error;
}

$conn->close();
?>