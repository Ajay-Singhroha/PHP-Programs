<?php
$connection=mysqli_connect('localhost','ajay','ajayks@1','emails') or die(mysqli_error($connection));
$email=$_REQUEST['email'];

$arr=explode('@',$email);
$username=$arr[0];
$domain=$arr[1];

$domain_query="SELECT * FROM domain where domain='$domain';";
$query1_result=mysqli_query($connection,$domain_query) or die(mysqli_error($connection));
if(mysqli_num_rows($query1_result)==0){
    header('location:q8html.php?email_error=Domain name not available');
}

$email_query="SELECT * from email_domain where username='$email' and domain ='$domain';";
$query2_result=mysqli_query($connection,$email_query) or die(mysqli_error($connection));
if(mysqli_num_rows($query2_result)!=0){
    header('location:q8html.php?email_error=Email already exists');

}

$insert_query="insert into email_domain values('$email','$domain');";
$insert_result=mysqli_query($connection,$insert_query) or die(mysqli_error($connection));

echo "Hurray!, this email is yours now .";

?>