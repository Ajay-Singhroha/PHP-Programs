<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get your email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
    <form method="POST" action='q8.php'>
        <label for="bday"><h3>Form your email :: </h3></label>
        <input type="email" name="email">
        <input type="submit" value="Check for availability">
        <br/>
        <div> <h1><?php 
            if(!filter_input(INPUT_GET,'email_error')==""){
            echo filter_input(INPUT_GET,'email_error');
            }?></h1></div>
    </form>
</center>
</body>
</html>