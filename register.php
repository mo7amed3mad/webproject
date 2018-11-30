<?php
session_start();
include('register.html')
$con=mysql_connect('localhost','user','root');
if(!$con){
die("cannot connect :".mysql_error());
}
mysql_query("CREATE DATABASE register",$con);
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50)  NOT NULL,
pass VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if (isset($_POST['register'])){
 $name = mysql_real_escape_string( $_POST['username']);
 $email =  mysql_real_escape_string( $_POST['email']);
 $pass1 = mysql_real_escape_string ($_POST['password']);
 $pass2 = mysql_real_escape_string ($_POST['conpass']);
 if ($pass1==$pass2) {
 	pass1=md5($pass1);
 	$sql = "INSERT INTO user (name, email, pass)
VALUES ('$name', '$email', '$pass1')";
 	$_SESSION['message']=" you are now logged in ";
 	$_SESSION['name']=$name;


 	# code...
 }
 else
 {
 	$_SESSION['message']=" the tow password do not match";
 }
}







?>