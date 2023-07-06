<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db_name = "attendance_sys";

   $connection = mysqli_connect($servername,$username,$password,$db_name);

   if($connection){
       //echo "Connetion successful";
   }else{
       echo "Connection faild";
   }
?>