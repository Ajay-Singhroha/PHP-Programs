<?php
    $color=array('White','Green','Red');
    sort($color);
    echo "Array output in normal form :: ";
     foreach($color as $c){
         echo $c." ";
     }
     echo "<br>";
     echo "Array in list form"."<br>";
     echo "<ul>";
     
         foreach($color as $c){
            echo "<li> $c</li>";
         }
       
    echo"</ul>";
    ?>
    