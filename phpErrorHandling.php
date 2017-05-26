<?php
//if(!file_exists("welcome.text")){
//    die("File not avaialble");
//}
//else
//{
//    $input_file=fopen("welcome.text",'r');
//}


//Advanced/custom error handling

function custom_error($errorno,$errorstr,$errorfile,$errorline){
    echo $errorno, $errorstr,$errorfile,$errorline;
}
set_error_handler(custom_error);

echo($ok);
?>
