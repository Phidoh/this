<?php
     $uname=$_POST["Uname"];
     $email1=$_POST["email1"];
     $email2=$_POST["email2"];
     $brief=$_POST["brief"];

     $headers="FROM:".$uname."\n Email:".$email1;

     if(mail($email2,"",$brief,$headers)){
        echo "Message sent";
     }
     else{
        echo "failed to connect";
     };

?>