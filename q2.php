
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sortings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
for($i=0;$i<count($cars);$i++){
    echo $cars[$i]." ";
}
echo"<br>";


$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

for($i=0;$i<count($numbers);$i++){
    echo $numbers[$i]." ";
}
echo"<br>";

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

for($i=0;$i<count($cars);$i++){
    echo $cars[$i]." ";
}
echo"<br>";

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

for($i=0;$i<count($numbers);$i++){
    echo $numbers[$i]." ";
}
echo"<br>";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $key=>$value){
    echo"Key= ".$key." => ".$value." ";
}
echo"<br/>";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach($age as $key=>$value){
    echo"Key= ".$key." => ".$value." ";
}
echo"<br/>";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
foreach($age as $key=>$value){
    echo"Key= ".$key." => ".$value." ";
}
echo"<br/>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
foreach($age as $key=>$value){
    echo"Key= ".$key." => ".$value." ";
}
echo"<br/>";
?>
</body>
</html>
