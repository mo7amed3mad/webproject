<?php
include('contact.html')
if (isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
}

$con=mysql_connect('localhost','user','root');
if(!$con){
die("cannot connect :".mysql_error());
}
mysql_query("CREATE DATABASE CONTACT",$con);
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50)  NOT NULL,
message VARCHAR(300) NOT NULL,
reg_date TIMESTAMP
)";

$sql = "INSERT INTO MyGuests (name, email, message)
VALUES ('$name', '$email', '$message')";


?>