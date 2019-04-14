<?php 
    $string=$_REQUEST['string'];
    echo(strrev($string));


    echo("\n");

    for($i = strlen($string)-1;$i>=0;$i--){
        echo($string[$i]);
    }

    function reverse($str)
    {
        $length=strlen($str);

        if($length==1){
            return $str; 
        }
        else{
            $length--;
            return reverse(substr($str,1,$length)).substr($str,0,1);
        }
    }

    print_r(reverse($string));

?>