<?php

session_start();
header('location:mainlogin.php');

$con = mysqli_connect('localhost','root');
if($con){
	echo"  Registration successfully......";
}else{
	echo " no connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$Mobile = $_POST['Mobile'];
$Email = $_POST['Email'];
$address = $_POST['address'];
$City = $_POST['City'];
$state = $_POST['state'];
$Aadhar = $_POST['Aadhar'];
$pan = $_POST['pan'];
$pass = $_POST['password'];


$q = " select * from signin  where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Email Already Registard";
}else{

	$qy= " insert into signin(name ,Mobile ,Email ,address ,City ,state ,Aadhar ,pan ,password) values ('$name' , '$Mobile' , '$Email' , '$address' , '$City' , '$state' , '$Aadhar' , '$pan' , '$pass') ";
	mysqli_query($con, $qy);
}



?>