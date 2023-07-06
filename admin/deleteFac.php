<?php
  require "database/db_connection.php";

  $id = $_GET['did'];


  $sql = " delete from faculty where faculty_id = '$id' ";
  $result = mysqli_query($connection,$sql);

  if($result){
    echo "<script> alert('Deleted Sucessfully..') </script>
    <script>window.open('faculty.php','_self')</script>";
  }else{
    echo "<script> alert('Deletion Faild..') </script>
    <script>window.open('faculty.php','_self')</script>";
  }
?>