<?php
require 'connect.php';

$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');

$username=mysqli_real_escape_string($connection,$username);
$password=mysqli_real_escape_string($connection,$password);

$password=md5($password);

$select_query="SELECT * from users where username='$username' and password='$password';";
$select_result=mysqli_query($connection,$select_query);
$select_query2="SELECT * from users where email='$username' and password='$password';";
$select_result2=mysqli_query($connection,$select_query2);
echo 'before query';
if(mysqli_num_rows($select_result)>0){
    $_SESSION['email']=$username;echo 'in user query';

    header("location:home.html"); 
}


elseif(mysqli_num_rows($select_result2)>0){echo 'in email query';

    $_SESSION['email']=$username;
    header("location:home.html"); 
}
else{
header('location:login.php?login_error=User does not exist !');
}
?>