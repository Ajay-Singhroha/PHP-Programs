<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Find Factorial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method='POST' action='/q11.php'>
    <h1>Enter the number : </h1>
    <input type='number' name='one' placeholder='Enter  here' required><br><br>
    
    <input type="submit" value="Calculate Factorial"><br><br>

    </form>
</body>
</html>


<?php
    $one=(int)$_REQUEST['one'];
    
    function findFactorial($num){
        
          if($num ==0)
            {
               return 1;
            }
          else 
            {	
               return $num * findFactorial($num-1);
            }
           

    }
    echo "<br>";
    echo "<h4>".findFactorial($one)."</h4>";

?>