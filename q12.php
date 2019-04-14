<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Check Prime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method='POST' action='/q12.php'>
    <h1>Enter the number : </h1>
    <input type='number' name='one' placeholder='Enter  here' required><br><br>
    
    <input type="submit" value="Check Prime"><br><br>

    </form>
</body>
</html>


<?php
    $one=(int)$_REQUEST['one'];
    
    function primeCheck($number){ 
        if ($number == 1) 
        return 0; 
        for ($i = 2; $i <= $number/2; $i++){ 
            if ($number % $i == 0) 
                return 0; 
        } 
        return 1; 
    } 
    echo "<br>";

    
    $flag = primeCheck($one); 
    if ($flag == 1) 
    echo "<h4>".$one." is Prime </h4>";
    else
    echo "<h4>".$one." is not Prime </h4>";
    ?> 
    

