
<table>
    <?php

foreach(filter_list() as $id=>$filterName){
    echo '<tr><td>'.$filterName .'</td><td>'.filter_id($filterName).'</td></tr>';
}
?>
    
    <!--sanitize the string -->
    
</table>
<?php
    $str="<h1>Hello World</h1>";
    echo $str."<br>";
    $str = filter_var($str,513);
    echo $str;
    ?>


<?php
$int = 100;

if (!filter_var($int, 257) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>