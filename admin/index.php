<?php
session_start();
  require "database/db_connection.php";
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
  $facSql = " select * from faculty ";
  $runFacQuery = mysqli_query($connection,$facSql);
  $semSql = " select * from grade_tbl ";
  $runSemQuery = mysqli_query($connection,$semSql);
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
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>


                <!-- content area -->

                <div class="main-content col-10">
                    <div class="card">
                        <div class="card-title">
                            <h4>Student Grade</h4>
                        </div>
                        <div class="card">
                        <div class="card-body">
                        <h5 style="color: green; font-weight:bold;">Add Student</h5>
                                <div class="teacher-form">
                                    <form action="form_action.php" method="POST">
                                        <div class="form-row">
                                            <div class="form-group text-left col-md-2">
                                                <label>Roll Number</label>
                                                <input type="number" name="roll" class="form-control">
                                            </div>
                                            <!-- att_date,student_name,faculty,semester -->
                                            <div class="form-group text-left col-md-6">
                                                <label>Student Name</label>
                                                <input type="text" name="student_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group text-left col-md-4">
                                            <select name="semester" class="form-control">
                                                <option selected>Choose Faculty</option>
                                                <?php while($facRow = mysqli_fetch_assoc($runFacQuery)):; ?>
                                                <option value="<?php echo $facRow['faculty_name'];?>"><?php echo $facRow['faculty_name'];?></option>
                                                <?php  endwhile;?>
                                            </select>
                                        </div>
                                        <div class="form-group text-left col-md-4">
                                            <select name="faculty" class="form-control">
                                                <option selected>Choose Semester</option>
                                                <?php while($semRow=mysqli_fetch_assoc($runSemQuery)):;?>
                                                <option value="<?php echo $semRow['grade_name'];?>"><?php echo $semRow['grade_name'];?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                        <button type="submit" name="student_submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                        
                            </div>
                        <div class="card-body mt-4">
                            <div class="sub-title">
                                <h5 style="color: green; font-weight:bold;">Mark Attendance</h5>
                            </div>
                            <div style="float:right;" class="attend">
                                <a href="singleRecord.php"><input style="background: blue; 
                                padding:10px 12px;
                                color:white;
                                border:none;
                                cursor:pointer;
                                border-radius:4px;
                                " type="submit" value="Total Attend"></a>
                            </div>
                            <hr style="color:black; height:4px;">
                <!-- attendance table -->
                            <div class="content-table">
                                <form action="form_action.php" method="POST">
                                <div class="form-row">
                                            <div class="form-group text-left col-md-4">
                                                <label>Select Date</label>
                                                <input type="date" name="att_date" class="form-control">
                                            </div>
                                        </div>
                                <table class="table">
                                    <thead>
                                        <!--`id`, `grade_id`, `grade_name`` -->
                                        <tr> 
                                            <th>SN</th>
                                            <th scope="col">Student Name</th>
                                            <th>Roll No</th>
                                            <th scope="col">Faculty</th>
                                            <th scope="col">Semester</th>
                                            <th scope="col">Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       $sql = " select * from students_tbl ";
                                       $attendQuery = mysqli_query($connection,$sql) or die("query faild");
                                       $num = mysqli_num_rows($attendQuery);
                                      // echo $num;
                                       if($num > 0){
                                           //`id`, `att_date`, `student_name`, `faculty`, `semester`, `attendance_status`
                                           $sn = 0;
                                           $counter=0;
                                           while($row=mysqli_fetch_assoc($attendQuery)){

                                               //$att_name = $row['att_date'];
                                               $sn++;
                                               $id = $row['std_id'];
                                               $student_name = $row['student_name'];
                                               $roll = $row['roll'];
                                               $faculty = $row['faculty'];
                                               $semester = $row['semester'];
                                    ?>
                                        <tr>
                                            <td><?php echo $sn; ?></td>
                                            <td><?php echo $student_name ;?>
                                                <input type="hidden"  value="<?php echo $student_name ;?>" name="name[]">
                                            </td>
                                            
                                            <td><?php echo $roll; ?>
                                            <input type="hidden"  value="<?php echo $roll ;?>" name="roll[]">
                                            </td>
                                            <td><?php echo $faculty ;?></td>
                                            <td><?php echo $semester ;?></td>
                                            
                                        <td>
                                            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Present">
                                            <label>P</label>
                                            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent">
                                            <label >A</label>
                                        </td>
                                        
                                        </tr>
                                        <?php
                                           $counter++;
                                           }
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <input style="
                                    background-color: green;
                                    border:none;
                                    padding: 7px;
                                    margin: 12px;
                                    color:white;
                                    height: 46px;
                                    width: 140px;
                                    border-radius:5px; "
                                type="submit" value="Save Attendance" name="take_attend">
                                </form>
                            </div>
                    <!--  attendance table end -->

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