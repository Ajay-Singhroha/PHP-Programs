<?php

    require 'connect.php';
    $name=$_REQUEST['name'];
    $rollno=(int)$_REQUEST['rollno'];
    $math=(int)$_REQUEST['math'];
    $eng=(int)$_REQUEST['eng'];
    $hindi=(int)$_REQUEST['hindi'];

    $select_query="SELECT * from student  where name= '$name' and rollno ='$rollno';";
    $select_result=mysqli_query($connection,$select_query) or die(mysqli_error($connection));
    if($math>100 or $eng>100 or $hindi>100 or $math<0 or $eng<0 or $hindi<0){
        echo "in if";
        header("location:home.php?new_error= Incorrect Marks entered !");
    }
     
    
    elseif(mysqli_num_rows($select_result)>0){
        header("location:home.php?new_error= Student already exists !");

    }
    else{
    $insert_query="INSERT into student values('$name','$rollno','$math','$eng','$hindi');";
    $insert_result=mysqli_query($connection,$insert_query) or die(mysqli_error($connection));
    header("location:home.php?new_error= Record Inserted !"); 
    }/* 
*/


?>