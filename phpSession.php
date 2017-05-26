<?php

session_start();
session_unset();
session_destroy();
$_SESSION["users"]=array(
    array("Satvir","Evans","3rd"),
    array("parvez","scandia","1k"),
    );
    echo count($_SESSION["users"]);
//$_SESSION["user"]="Satvir";
//$_SESSION["location"]= "Evans";
//$_SESSION["floor"] = "3rd";
//
//$_SESSION["user"].= "parvez";
//$_SESSION["location"].= "Scandia";
//$_SESSION["floor"] .= "1K";
?>


<html>
<body>
   <?php  
    if(count($_SESSION)==0){
    echo "no session set ";
    }
else{
    foreach($_SESSION["users"] as $name=>$value){
    //echo "the location is ".$_SESSION["location"].  $_SESSION["floor"] . ". <br>";
        echo "<br>";
        echo "Name of user is". $_SESSION["users"][$name][0];
        echo "<br>";
        echo "the address is " . $_SESSION["users"][$name][1] . $_SESSION["users"][$name][2];
        //echo $value;
    }
}    
    ?>
    </body>
    

</html>