<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cseb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
$sql="CREATE TABLE LoginData(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Username VARCHAR(30) NOT NULL,
        Password VARCHAR(30) NOT NULL)";
		if($conn->query($sql)==TRUE){
		echo"Table LoginData created successfully";
	}
	else{
		echo" Error Creating table: ".$conn->error;
	}
	$conn->close();
?>