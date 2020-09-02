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
	$comment=$_POST["comment"];

 if (empty($user)||empty($email)||empty($comment) ) {
 	echo "please complete all data";
 } else {
 	$insert = mysqli_query($conn,"INSERT INTO `user_form` (`user`, `email`, `mobile`, `comment`) VALUES ('$user', '$email', '$mobile', '$comment')");
 	echo "succesful";
  }
}

?>