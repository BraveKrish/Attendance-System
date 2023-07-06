<?php
  require "database/db_connection.php";

  if(isset($_POST['CheckAttend'])){
    $rollNo=$_POST['roll'];
    $name=$_POST['name'];
    $status=$_POST['attendType'];

    //echo $name.' '.$status;
    $sql=" Select  name,roll,attendance,COUNT(attendance) AS total from attendance where 
    roll='$rollNo' and name='$name' and attendance='$status' ";
    $result=mysqli_query($connection,$sql);

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
                        <li><a href="faculty.php">Faculty</a></li>
                        <li><a href="viewAttendance.php">Attendance</a></li>
                </div>


                <!-- content area -->

                <div class="main-content col-10">
                    <div class="card">
                        <div class="card-title">
                            <h4>View Student Total Attendance</h4>
                        </div>

                        <div class="card mt-4">
                        <div class="card-body">
                        <h5 style="color: green; font-weight:bold;">Select Student and Attend Status</h5>
                                <div class="teacher-form">
                                    <form action="" method="POST">
                                        <div class="form-row">
                                            <div class="form-group text-left col-md-2">
                                                <label>Roll No.</label>
                                                <input type="number" name="roll" class="form-control">
                                            </div>
                                            <div class="form-group text-left col-md-5">
                                                <label>Student Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="form-group text-left col-md-5">
                                                <label>Attendance</label>
                                                <select name="attendType" class="form-control">
                                                    <option selected>Select attendance type</option>
                                                    <option value="Present">Present</option>
                                                    <option value="Absent">Absent</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                        <button type="submit" name="CheckAttend" class="btn btn-primary">Show Record</button>
                                    </form>
                                </div>

                            <?php if(isset($_POST['CheckAttend'])) { ?>    
                            <div class="table mt-5">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">Roll</th>
                                        <th scope="col">Name</th>
                                        <?php if(isset($status)=='Present') { ?>
                                        <th scope="col">Total Present(Days)</th>
                                        <?php }else{ ?>
                                        <?php //if(isset($status)=='Absent') { ?>
                                        <th scope="col">Total Absent(Days)</th>
                                        <?php } ?>
                                        <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                             if(mysqli_num_rows($result)>0) {

                                                while($show=mysqli_fetch_assoc($result)){
                                                    
                                                $roll=$show['roll'];
                                                $std_name=$show['name'];
                                                $attend=$show['total'];
                                               $attStatus=$show['attendance'];
                                                //echo $std_name; exit;
                                        ?>
                                        <tr>
                                        <td><?php echo $roll;?></td>
                                        <td><?php echo $name;?></td>
                                        <td><?php echo $attend;?></td>
                                        <td><?php echo $attStatus;?></td>
                                        <td></td>
                                        </tr>
                                        <?php 
                                                }
                                            }else{
                                                echo "no any record found for this request";
                                            }
                                        ?>
                                    </tbody>
                                    </table>
                                </div>
                                <?php } ?>
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