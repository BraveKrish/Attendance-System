<?php
  require "database/db_connection.php";

  $id = $_GET['dsem_id'];
  //echo $id;\

  $sql = " delete from grade_tbl where grade_id = '$id' ";
  $result = mysqli_query($connection,$sql);

  if($result){
    echo "<script> alert('Deleted Sucessfully..') </script>
    <script>window.open('grade.php','_self')</script>";
  }else{
    echo "<script> alert('Deletion Faild..') </script>
    <script>window.open('grade.php','_self')</script>";
  }
?>