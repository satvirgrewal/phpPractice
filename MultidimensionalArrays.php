<?php

$cars=array(
    array("Volvo",22,18),
    array("BMW",5,13)
);
    echo $cars[0][0]. "In stock : " . $cars[0][1]." Sold: ". $cars[0][2]. "<br>";
    echo $cars[1][0]. "In stock : " . $cars[1][1]. " Sold: ".$cars[1][2]."<br>";

//for()
echo count($cars[0]);
echo sizeof($cars);

?>