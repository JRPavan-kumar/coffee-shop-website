<?php
include 'database.php';
if(isset($_POST['submit']))
{
$name=$_POST['uname'];
$password=$_POST['Password'];
$sql="insert into LoginData(Name,Password) 
	values('$name','$password')";
	if(mysqli_query($con,$sql))
	{
		echo "<script> alert('Inserted a record')</script>";
	}
	else
		echo "error".mysqli_error($con);
	echo
	mysqli_close($con);
}
?>
