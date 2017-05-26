<?php
$db_server="localhost";
$db_username="root";
$db_password="waheguru";
$db_name="php_tutorial";

$conn=new mysqli($db_server,$db_username,$db_password,$db_name);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
   
        echo "connection successful";

  $sql="
  Create table Student(
  UIN int auto_increment primary key,
  FirstName varchar(50),
  LastName varchar(50)  
  )
  ";

if($conn->query($sql)===true){
    echo "Table created";
}
else{
    echo "Table creation failed". $conn->connect_error;
}

      
      
?>