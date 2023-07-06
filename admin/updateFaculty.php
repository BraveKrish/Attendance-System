<?php
  require "database/db_connection.php";

  $id = $_GET['id'];
  // echo $id; 
  $sql = " select * from faculty where faculty_id = $id ";
  $result = mysqli_query($connection,$sql);

    $row = mysqli_fetch_assoc($result);
    $name = $row['faculty_name'];
    $duration = $row['duration'];
    // echo $duration; exit;

    if(isset($_POST['facultyUpdate'])){
        $faculty_name = $_POST['fname'];
        $dura = $_POST['duration'];

        $sql1 = " update faculty set faculty_name ='$faculty_name' and duration = '$dura' where faculty_id = '$id' ";
        // echo $sql1; exit;
        $updateQuery = mysqli_query($connection,$sql1);

        if($updateQuery){
            echo "<script> alert('Updated sucessfully..') </script>
            <script>window.open('faculty.php','_self')</script>";
        }else{
            echo "<script> alert('Updation Faild..') </script>
            <script>window.open('updateFaculty.php','_self')</script>";
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
                            <h4>Update Faculty</h4>
                        </div>
                        </div>
                        <div class="card mt-4">
                        <div class="card-body">
                        <h5 style="color: green; font-weight:bold;">Update Faculty</h5>
                                <div class="teacher-form">
                                    <form action="" method="POST">
                                        <div class="form-row">
                                            <div class="form-group text-left col-md-6">
                                                <label>Faculty Name</label>
                                                <input type="text" name="fname" class="form-control" value="<?php echo $name; ?>">
                                                <label>Duration(Month)</label>
                                                <input type="text" name="duration" class="form-control" value="<?php echo $duration; ?>">
                                            </div>
                                        </div>
                                       </div>
                                        <button type="submit" name="facultyUpdate" class="btn btn-primary">Save</button>
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
