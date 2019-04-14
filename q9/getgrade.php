<?php

    require 'connect.php';
    $name=$_REQUEST['name'];
    $rollno=(int)$_REQUEST['rolln'];
    $select_query="SELECT math,english,hindi from student  where name= '$name' and rollno ='$rollno';";
    $select_result=mysqli_query($connection,$select_query) or die(mysqli_error($connection));
   
 
    if(mysqli_num_rows($select_result)==0){
        header("location:home.php?get_error= No Student with this rollno exists !");

    } 
    else{
         $row=mysqli_fetch_array($select_result) or die(mysqli_error($connection));
    $sum=$row['math']+$row['english']+$row['hindi']; 
    $average=(int)($sum/3);
    $grade='F';
    switch($average){
        case $average>90:
        $grade='A';
        break;
        case $average>75:
        $grade='B';
        break;

        case $average>60:
        $grade='C';
        break;
        case $average>45:
        $grade='D';
        break;
        case $average>33:
        $grade='E';
        break;
        default:
        $grade='F';
        break;

    }
    header("location:home.php?get_error= Grade calculated, Percentage ='$average'% and Grade is '$grade' !");  
}
    /*
*/


?>