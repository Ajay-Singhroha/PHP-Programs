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
    <h1>Student Record</h1><br><br>
    <h3>New Record</h3>
    <form method="POST" action='newrecord.php'>
        <label for='name'>Name - </label>
        <input type="text" name='name' id='name' placeholder="Name here" required>
        <label for='rollno'>RollNO - </label>
        <input type="number" name='rollno' id='rollno' placeholder="Roll NO. here" required>
        <label for='math'>Math - </label>
        <input type="number" name='math' id='math' placeholder="Math marks here" required>
        <label for='eng'>English - </label>
        <input type="number" name='eng' id='eng' placeholder="English marks here" required>
        <label for='hindi'>Hindi - </label>
        <input type="number" name='hindi' id='hindi' placeholder="Hindi marks here" required>
        <input type="submit" value="Insert Record"><br>
        <div> <h1><?php 
            if(!filter_input(INPUT_GET,'new_error')==""){
            echo filter_input(INPUT_GET,'new_error');
            }?></h1></div>
        <br><br>
    </form><br><br>
    <h3>Get Grade of Student</h3>
    <form method="POST" action='getgrade.php'>
        <label for='name'>Name - </label>
        <input type="text" name='name' id='name' placeholder="Name here" required>
        <label for='rollno'>RollNO - </label>
        <input type="number" name="rolln" id='rollno' placeholder="Roll NO. here" required>
        
        <input type="submit" value="Calculate Score"><br>
        <div> <h1><?php 
            if(!filter_input(INPUT_GET,'get_error')==""){
            echo filter_input(INPUT_GET,'get_error');
            }?></h1></div>
    </form>
</center>
</body>
</html>
