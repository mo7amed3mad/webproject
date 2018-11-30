<?php
session_start();
include('login.html')
$con=mysql_connect('localhost','user','root','register');

}


if (isset($_POST['login'])){
 $name = mysql_real_escape_string( $_POST['username']);
 
 $pass1 = mysql_real_escape_string ($_POST['password']);
 $pass1=md5($pass1);
 $sql="SELECT * FROM user WHERE name='$name' AND pass1='pass1'";
 $result=mysql_query($con,$sql);
 if (mysql_num_rows($result)==1){
$_SESSION['message']="you are now loged in";
$_SESSION['name']=name;
 }
 else
 {
 	$_SESSION['message']="username/password inncorrect";

 }
 

}







?>