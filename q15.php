<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Palindrome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method='POST' action='/q15.php'>
    <h1>Enter the number : </h1>
    <input type='text' name='one' placeholder='Enter  here' required><br><br>
    
    <input type="submit" value="Palindrome Check"><br><br>

    </form>
</body>
</html>


<?php
    $string=$_REQUEST['one'];
    echo "<br><br>";
    function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
    if(check_palindrome($string)){
        echo" String is palindrome <br>";
    }
    else{
        echo" String is not palindrome <br>";

    }

    ?> 
    

