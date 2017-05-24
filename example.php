<?php
  $greeting = 'Hello, PHP World!';
  echo '<h1>' . $greeting . '</h1>';
$cars = array(1=>"one",35=>"thirty five",2=>"two");
    echo $cars;
printAssociativeArray($cars);
    echo "<br>";
    sort($cars);
    printAssociativeArray($cars);


function printArray($array){
    $length = count($array);
    for($x=0;$x<$length;$x++){
        echo $array[$x];
        echo "<br>";
    } 
}

function printAssociativeArray($array){
    //$length = count($array);
    foreach($array as $x => $x_value){
        echo "int is". $x ."and english". $x_value;
        echo "<br>";
    }
}
echo $_SERVER['PHP_SELF'];
?>