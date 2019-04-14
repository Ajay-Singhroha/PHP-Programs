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
<h1>Register</h1><br><br>
    <form method="POST" action="register_script.php">
        <label for='username'>Username </label>
        <input type="text" name="username" placeholder="Enter username here " required ><br>
        <div> <?php if(!filter_input(INPUT_GET,'username_error')==""){
            echo filter_input(INPUT_GET,'username_error');
        }?></div><br>
        <label for='username'>Email </label>
        <input type="email" name="email" placeholder="Enter email here " required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
        <div> <?php if(!filter_input(INPUT_GET,'email_error')==""){
            echo filter_input(INPUT_GET,'email_error');
        }?></div><br>
        <label for='username'>Phone </label>
        <input type="number" name="phone" placeholder="Enter mobile no. here " required><br><br>
        <label for='password'>Password </label>
        <input type="password" name="password" placeholder="Enter password here " required><br><br>
        <div> <?php if(!filter_input(INPUT_GET,'password_error')==""){
            echo filter_input(INPUT_GET,'password_error');
        }?></div><br>
        <input type="submit"  value="Register">
    </form>
    <h3> Already registered? Login <a href='login.php'>here</a></h3><br>
</center>
</body>
</html>