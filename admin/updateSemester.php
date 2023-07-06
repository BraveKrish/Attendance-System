<?php
  require "database/db_connection.php";

  $id = $_GET['esem_id'];
  //echo $id;

  $sql = " select * from grade_tbl where grade_id = $id ";
  $result = mysqli_query($connection,$sql);

    $row = mysqli_fetch_assoc($result);
    $name = $row['grade_name'];

    if(isset($_POST['gradeUpdate'])){
        $gname = $_POST['gname'];

        $sql1 = " update grade_tbl set grade_name ='$gname' where grade_id = $id ";
        $updateQuery = mysqli_query($connection,$sql1);

        if($updateQuery){
            echo "<script> alert('Updated sucessfully..') </script>
            <script>window.open('grade.php','_self')</script>";
        }else{
            echo "<script> alert('Updation Faild..') </script>
            <script>window.open('updateSemester.php','_self')</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Attendance System</title>
    <!-- css, bootstrap and font-awesome links -->
    <?php include "config/links.php"?>
<style>
    #sidebar .main-content .card-body{
            background-color: lightblue;
        }
    #sidebar .main-content .sub-title
    {
        display: flex;
        justify-content: space-between;
    }
    #sidebar .main-content .sub-title button{
        border: none;
        background-color: green;
        color: white;
        height: 30px;
        width: 100px;
        border-radius: 8px;
        cursor: pointer;

    }
</style>
</head>
<body>
    <section id="heading">
        <div class="container">
            <div class="row justify-content-center">
                <div class="head col-12 mt-2">
                    <div class="logo"><img src="assets/images/attendance.png" alt=""></div>
                    <h3 class="title">Online Attendance System</h3>
                </div>
            </div>
        </div>
   </section>

   <section id="sidebar">
       <div class="container">
           <div class="row">
                <div class="content col-2 mt-3">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="grade.php">Grade</a></li>
                        <li><a href="student.php">Faculty</a></li>
                </div>


                <!-- content area -->

                <div class="main-content col-10">
                    <div class="card">
                        <div class="card-title">
                            <h4>Update Semester</h4>
                        </div>
                        </div>
                        <div class="card mt-4">
                        <div class="card-body">
                        <h5 style="color: green; font-weight:bold;">Add New Semester</h5>
                                <div class="teacher-form">
                                    <form action="" method="POST">
                                        <div class="form-row">
                                            <div class="form-group text-left col-md-6">
                                                <label>Semester</label>
                                                <input type="text" name="gname" class="form-control" value="<?php echo $name; ?>">
                                            </div>
                                        </div>
                                </div>
                                        <button type="submit" name="gradeUpdate" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </section>
<?php include "config/js_links.php"?>
</body>
</html>