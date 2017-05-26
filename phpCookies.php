<?php
//setcookie(name,value,expire,path,domain,secure,httponly);
$cookie_name="user";
$cookie_value="Satvir Grewal";
setcookie($cookie_name,$cookie_value,time()+(10000),"/");
?>


<html>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie not set";
    }
    else{
        echo "Cookie username is ".$cookie_name;
        echo "<br>";
        echo "The value is ". $_COOKIE[$cookie_name];
    }
    ?>
    
    </body>
</html>