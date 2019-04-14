<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login /Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   
<center>
<h1>Login</h1><br><br>
    <form method="POST" action="login_script.php">
        <label for='username'>Email or</label>
        <input type="text" name="username" placeholder="Enter username/email here " required><br><br>

        <label for='password'>Password </label>
        <input type="password" name="password" placeholder="Enter password here " required><br><br>
        <input type="submit"  value="Login">
        <br><br>
        <div><?php if(!filter_input(INPUT_GET,'login_error')==""){
            echo filter_input(INPUT_GET,'login_error');
        }
        ?>
        </div>
        <br>
    </form>
    <h3> Yet not registered? Register <a href='register.php'>here</a></h3><br>
</center>
</body>
</html>