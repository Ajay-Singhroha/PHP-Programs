<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pattern</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method='POST' action='/q17.php'>
    <h1>Enter the number : </h1>
    <input type='number' name='one' placeholder='Enter  here' required><br><br>
    
    <input type="submit" value="Generate Pattern"><br><br>

    </form>
</body>
</html>


<?php
    $number=(int)$_REQUEST['one'];
    echo "<br>";

   
for($x=1;$x<=$number;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
     echo"<br>";}



?>