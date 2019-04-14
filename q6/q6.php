<?php
$lang=$_REQUEST['option'];
switch($lang){
    case 'Choose your option':
    echo "You didn't pick any language";
    break;
    case 'English':
    echo "Hello !";
    break;
    case 'Hindi':
    echo "नमस्ते !";
    break;
    case 'Telegu':
    echo "హలో !";
    break;
    case 'Urdu':
    echo "ہیلو !";
    break;
}
?>