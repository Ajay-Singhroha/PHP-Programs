<?php

    $option=$_REQUEST['option'];
    $string=$_REQUEST['string'];

    if($option==='Choose your option'){
        echo"Your string is :: ".$string;
        echo"<br>"."You chose wrong option";
    }
    elseif($option==='1'){
        echo"String without whitespaces is :: ".str_replace(' ','',$string);
        echo"<br>"."Whitespace removal with preg_replce :: ".preg_replace('/\s+/','',$string);
    }
    elseif($option==='2'){
        $substr=$_REQUEST['substr'];
        if(preg_match("/{$substr}/i",$string)){
            echo"True"."<br>"."String matched";
        }
        else{
            echo"False"."<br>"."String didn't match !";
        }
        
    }
    elseif($option==='3'){
        if(preg_match("/^[A-Z]+$/",$string)){
            echo"String is all uppercase"."<br>";
        }
        elseif(preg_match("/^[a-z]+$/",$string)){
            echo"String is all lowercase"."<br>";
        }
        else{
            echo"String is neither all uppercase nor all lowercase"."<br>";
        }
    }
    else{
        echo"Replaced string is :: ";
        echo preg_replace('/the/','that',$string,1);

    }
    echo "<br>"."<h3> Back to menu </h3>";
    echo "<a href='q3.html'>Menu</a>";

?>