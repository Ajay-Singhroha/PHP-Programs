<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print till n</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method='POST' action='/q13.php'>
    <h1>Enter the number : </h1>
    <input type='number' name='one' placeholder='Enter  here' required><br><br>
    
    <input type="submit" value="Print"><br><br>

    </form>
</body>
</html>


<?php
    $one=(int)$_REQUEST['one'];
    
    for($i=0;$i<=$one;$i++){
        echo $i." <br>";
    }
    ?> 
    

