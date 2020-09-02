<?php

$server ='localhost';
$user ='root';
$pass ='';
$db ='astute';

$conn = mysqli_connect($server,$user,$pass) or die("error");
$selectdb = mysqli_select_db($conn,$db) or die("error");

if (isset($_POST["submit"])) {
	$user=$_POST["user"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];

 if (empty($user)||empty($email)||empty($mobile)||empty($password)||empty($confirmpassword) ) {
 	echo "please complete all data";
 } else {
 	$insert = mysqli_query($conn,"INSERT INTO `registration_form` (`user`, `email`, `mobile`, `password`, `confirmpassword`) VALUES ('$user', '$email', '$mobile', '$password', '$confirmpassword')");
 	echo "succesful";
  }
}



?>