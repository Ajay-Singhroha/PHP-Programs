<?php


require 'connect.php';

$username=filter_input(INPUT_POST,'username');
$email=filter_input(INPUT_POST,'email');
$phone=filter_input(INPUT_POST,'phone');
$password=filter_input(INPUT_POST,'password');

$regex_email="/^[a-zA-Z0-9_.-]+(\.[a-z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-z0-9]+)*(\.[a-z]{2,3})$/";

if(!preg_match($regex_email,$email)){
    header('location:register.php?email_error= Plz enter a email');

}
if(strlen($password)<6){
    header("location:register.php?password_error=Password too short!");

}

$username=mysqli_real_escape_string($connection,$username);
$password=mysqli_real_escape_string($connection,$password);
$email=mysqli_real_escape_string($connection,$email);
$phone=mysqli_real_escape_string($connection,$phone);

$password=md5($password);
$select_query="SELECT * FROM users WHERE email='$email';";

$select_result=mysqli_query($connection,$select_query) or die(mysqli_error($connection));

if(mysqli_num_rows($select_result)>0){
    header("location:register.php?email_error=Email already exists !");

}
$select_query2="SELECT * FROM users WHERE username='$username';";

$select_result2=mysqli_query($connection,$select_query2) or die(mysqli_error($connection));

if(mysqli_num_rows($select_result2)>0){
    header("location:register.php?username_error=Username already exists !"); 
}

$insert_query="INSERT INTO users(username,email,phone,password) VALUES('$username','$email','$phone','$password');";echo "inssert here";
$insert_result=mysqli_query($connection,$insert_query) or die(mysqli_error($connection));

$_SESSION['email']=$email;
$_SESSION['email']=mysqli_insert_id($connection);
echo "ibefore redirect here";
header("location:home.html");


?>