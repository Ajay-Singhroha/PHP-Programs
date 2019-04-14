<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Find Fibonacci</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method='POST' action='/q16.php'>
    <h1>Enter the number : </h1>
    <input type='number' name='one' placeholder='Enter  here' required><br><br>
    
    <input type="submit" value="Generate Fibonacci"><br><br>

    </form>
</body>
</html>


<?php
    $number=(int)$_REQUEST['one'];
    echo "<br>";

    function Fibonacci($number){ 
      
        if ($number == 0) 
            return 0;     
        else if ($number == 1) 
            return 1;     
          
        else
            return (Fibonacci($number-1) +  
                    Fibonacci($number-2)); 
    } 
      
    for ($counter = 0; $counter < $number; $counter++){   
        echo Fibonacci($counter),' '; 
    } 

?>