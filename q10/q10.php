

<?php
    $one=$_REQUEST['one'];
    $two=$_REQUEST['two'];
    $three=$_REQUEST['three'];

    function findGreatest($one,$two,$three){
                if ($one>$two)
        {
        if($one>$three)
            {echo "$one is the greatest";}
        else
            {echo "$three is the greatest";}
        }
        else
        {
        if ($two>$three)
            {echo "$two is the greatest";}

        else
            {echo "$three is the greatest";}
        } 

    }
    findGreatest($one,$two,$three);

?>