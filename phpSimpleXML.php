<?php
$myxmldata="<?xml version='1.0' encoding='UTF-8' ?>
<note>
 <users>
    <user>Satvir</user>
    <user>Parvez</user>
 </users>
<address> 401 Anderson Street, College Station</address>
</note>
";
$xml=simplexml_load_string($myxmldata) or die("Error: Cannot create object");
print_r($xml);
 

$xml1=simplexml_load_file("note.xml");
print_r($xml1);
?>