<html>
    <style>
        h5 {color:red;}
        .mandatory_fields:after{
            content:"*";
            color:red;
        }
    </style>
<body>
    
    <?php 
    $name = $email = $comment = $gender ="";
    $err_name = $err_email = "";
    
    if( $_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"] ))
           {  $err_name="Name is mandatory field" ; }
           else{
               $name =validateInput($_POST["name"]);
           }
           
           if(empty($_POST["email"])){
               $err_email="Email is mandatory field";
           }
           else{
                $email =validateInput( $_POST["email"]);
           }
        $comment =validateInput( $_POST["comment"]);
        $gender =validateInput( $_POST["gender"]);
    }
    
     function validateInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    
    ?>
    
    <h2>PHP Form Validation Example</h2>
    <p style="color:red">* required field.</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
   <div class="mandatory_fields"> Name:<input type="text" name="name"> <span class="error"><?php echo $err_name;?></span></div>
         
        <br><br>
    <div class="mandatory_fields">E-mail:<input type="text" name="email"> <?php echo $err_email ?> </div>
        <br>
        Gender: <br>
        <input type="radio" name="gender" value="Male" checked="checked">Male
        <input type="radio" name="gender" value="Female"> Female
        <br>
        Comments <br><textarea name="comment" rows="5" cols="50"></textarea>
        <br>
        <input type="submit" name="submit">
    </form>
    
    
    
   
    
    <?php
    echo "<h2>Your Input:</h2>";
echo $_POST["name"];
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender; 
     ?>
    
    </body>

</html>