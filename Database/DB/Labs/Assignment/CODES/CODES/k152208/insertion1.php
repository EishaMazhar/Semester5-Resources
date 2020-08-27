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
echo"Connected successfully!";


$stmt=$conn->prepare("INSERT INTO BOOK (BOOKID, TITLE, PUBLISHERNAME) VALUES(?,?,?)");
$stmt->bind_param("iss", $bookid, $title, $publishername);

$bookid=1;
$title="book one";
$publishername="pub one";
$stmt->execute();

$bookid="2";
$title="book two";
$publishername="pub two";
$stmt->execute();

$bookid="3";
$title="book three";
$publishername="pub three";
$stmt->execute();

$bookid="4";
$title="book four";
$publishername="pub four";
$stmt->execute();

$bookid="5";
$title="book five";
$publishername="pub five";
$stmt->execute();

$bookid="6";
$title="book six";
$publishername="pub six";
$stmt->execute();

$bookid="7";
$title="book seven";
$publishername="pub seven";
$stmt->execute();

$bookid="8";
$title="book eight";
$publishername="pub eight";
$stmt->execute();

$bookid="9";
$title="book nine";
$publishername="pub nine";
$stmt->execute();

$bookid="10";
$title="book ten";
$publishername="pub ten";
$stmt->execute();
$stmt->close();


$stmt=$conn->prepare("INSERT INTO BOOKAUTHOR (BOOKID, AUTHORNAME) VALUES(?,?)");
$stmt->bind_param("is", $bookid, $authorname);

$bookid="1";
$authorname="author1";
$stmt->execute();

$bookid="2";
$authorname="author2";
$stmt->execute();

$bookid="3";
$authorname="author3";
$stmt->execute();

$bookid="4";
$authorname="author4";
$stmt->execute();

$bookid="5";
$authorname="author5";
$stmt->execute();

$bookid="6";
$authorname="author6";
$stmt->execute();

$bookid="7";
$authorname="author7";
$stmt->execute();

$bookid="8";
$authorname="author8";
$stmt->execute();

$bookid="9";
$authorname="author9";
$stmt->execute();

$bookid="10";
$authorname="author10";
$stmt->execute();
$stmt->close();

$stmt=$conn->prepare("INSERT INTO PUBLISHER (NAME, ADDRESS, PHONE) VALUES(?,?,?)");
$stmt->bind_param("ssi", $name, $address, $phone);

$name="pub one";
$address="addr1"; 
$phone="123";
$stmt->execute();

$name="pub two";
$address="addr2"; 
$phone="123";
$stmt->execute();

$name="pub three";
$address="addr3"; 
$phone="123";
$stmt->execute();

$name="pub four";
$address="addr4"; 
$phone="123";
$stmt->execute();

$name="pub five";
$address="addr5"; 
$phone="123";
$stmt->execute();

$name="pub six";
$address="addr6"; 
$phone="123";
$stmt->execute();

$name="pub seven";
$address="addr7"; 
$phone="123";
$stmt->execute();

$name="pub eight";
$address="addr8"; 
$phone="123";
$stmt->execute();

$name="pub nine";
$address="addr9"; 
$phone="123";
$stmt->execute();

$name="pub ten";
$address="addr10"; 
$phone="123";
$stmt->execute();
$stmt->close();

$stmt=$conn->prepare("INSERT INTO BOOKCOPIES (BOOKID, BRANCHID, NOOFCOPIES) VALUES(?,?,?)");
$stmt->bind_param("iii", $bookid, $branchid, $noofcopies);

$bookid="1";
$branchid="b1";
$noofcopies="10";
$stmt->execute();

$bookid="2";
$branchid="b2";
$noofcopies="9";
$stmt->execute();

$bookid="3";
$branchid="b3";
$noofcopies="8";
$stmt->execute();

$bookid="4";
$branchid="b4";
$noofcopies="7";
$stmt->execute();

$bookid="5";
$branchid="b5";
$noofcopies="6";
$stmt->execute();

$bookid="6";
$branchid="b6";
$noofcopies="5";
$stmt->execute();

$bookid="7";
$branchid="b7";
$noofcopies="4";
$stmt->execute();

$bookid="8";
$branchid="b8";
$noofcopies="3";
$stmt->execute();

$bookid="9";
$branchid="b9";
$noofcopies="2";
$stmt->execute();

$bookid="10";
$branchid="b10";
$noofcopies="1";
$stmt->execute();
$stmt->close();

$stmt=$conn->prepare("INSERT INTO BOOKLOANS (BOOKID, BRANCHID, CARDNO, DATEOUT, DATEDUE) VALUES(?,?,?,?,?)");
$stmt->bind_param("iiidd", $bookid, $branchid, $cardno, $dateout, $datedue);

$bookid="1";
$branchid="b1";
$cardno="1";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="2";
$branchid="b2";
$cardno="2";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="3";
$branchid="b3";
$cardno="3";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="4";
$branchid="b4";
$cardno="4";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="5";
$branchid="b5";
$cardno="5";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="6";
$branchid="b6";
$cardno="6";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="7";
$branchid="b7";
$cardno="7";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="8";
$branchid="b8";
$cardno="8";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="9";
$branchid="b9";
$cardno="9";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();

$bookid="10";
$branchid="b10";
$cardno="10";
$dateout="2008-11-11";
$datedue="2008-11-22";
$stmt->execute();
$stmt->close();

$stmt=$conn->prepare("INSERT INTO LIBRARYBRANCH (BRANCHID, BRANCHNAME, ADDRESS) VALUES(?,?,?)");
$stmt->bind_param("iss", $branchid, $branchname, $address);

$branchid="1";
$branchname="branch1";
$address="add1";
$stmt->execute();

$branchid="2";
$branchname="branch2";
$address="add2";
$stmt->execute();

$branchid="3";
$branchname="branch3";
$address="add3";
$stmt->execute();

$branchid="4";
$branchname="branch4";
$address="add4";
$stmt->execute();

$branchid="5";
$branchname="branch5";
$address="add5";
$stmt->execute();

$branchid="6";
$branchname="branch6";
$address="add6";
$stmt->execute();

$branchid="7";
$branchname="branch7";
$address="add7";
$stmt->execute();

$branchid="8";
$branchname="branch8";
$address="add8";
$stmt->execute();

$branchid="9";
$branchname="branch9";
$address="add9";
$stmt->execute();

$branchid="10";
$branchname="branch10";
$address="add10";
$stmt->execute();
$stmt->close();

$stmt=$conn->prepare("INSERT INTO BORROWER (CARDNO, NAME, ADDRESS, PHONE) VALUES(?,?,?,?)");
$stmt->bind_param("issi", $cardno, $name, $address, $phone);

$cardno="1";
$name="borrower1";
$address="br add1";
$phone="1234";
$stmt->execute();

$cardno="2";
$name="borrower2";
$address="br add2";
$phone="5678";
$stmt->execute();

$cardno="3";
$name="borrower3";
$address="br add3";
$phone="9100";
$stmt->execute();

$cardno="4";
$name="borrower4";
$address="br add4";
$phone="1112";
$stmt->execute();

$cardno="5";
$name="borrower5";
$address="br add5";
$phone="1314";
$stmt->execute();

$cardno="6";
$name="borrower6";
$address="br add6";
$phone="1516";
$stmt->execute();

$cardno="7";
$name="borrower7";
$address="br add7";
$phone="1718";
$stmt->execute();

$cardno="8";
$name="borrower8";
$address="br add8";
$phone="1920";
$stmt->execute();

$cardno="9";
$name="borrower9";
$address="br add9";
$phone="2122";
$stmt->execute();

$cardno="10";
$name="borrower10";
$address="br add10";
$phone="2324";
$stmt->execute();
$stmt->close();


echo"New records created successfully!";

$conn->close();
?>