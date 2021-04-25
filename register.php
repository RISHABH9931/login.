<?php
$servername="localhost";
$username="root";
$password="";
$database_name="new enquiry";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	$Message = $_POST['Message'];

	$sql_query = "INSERT INTO new enquiry (Name,Email,Mobile,Message)
	VALUES ('$Name','$Email','$Mobile','$Message')";

	if (mysqli_query($conn, $sql_query))
	{
		echo "New Details Entry inserted successfully !";
	}
	else
	{
		echo "error: . $sql " . mysqli_error($conn);
	}
	mysql_open($conn);
}
?>