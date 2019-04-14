<?php
$connection=mysqli_connect('localhost','ajay','ajayks@1','users') or die(mysqli_error($connection));
    if(!isset($_SESSION)){
        session_start();
    }



    ?>