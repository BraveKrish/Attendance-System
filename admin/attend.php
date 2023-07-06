<?php
require "database/db_connection.php";

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
                    </ul>
                </div>


                <!-- content area -->

                <div class="main-content col-10">
                    <div class="card">
                    <div class="card-title">
                        <h4>Attendance Records</h4>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <table class="table">
                        <a href="viewAttendance.php" style="
                            text-decoration:none;
                            color:white;
                            background-color: rgb(13,174,5);
                            padding: 5px 15px;
                            border-radius: 3px;
                            "
                            >Back</a>
                            <thead>
                            <tr> 
                                <th scope="col">SN</th>
                                <th scope="col">Student Name</th>
                                <th>Roll No</th>
                                <th>Faculty</th>
                                <th>Semester</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(isset($_POST['view'])){
                                        $date = $_POST['date'];
                                        echo "<p style='color:green; text-align:center;font-size:20px;'>Attendance Date: $date</p>";

                                        $sql = " select attendance.name,attendance.roll,attendance.attendance,students_tbl.faculty,students_tbl.semester from attendance INNER JOIN students_tbl on attendance.roll = students_tbl.roll where attendance.date = '$date'";
                                        $query = mysqli_query($connection,$sql);
                                        $sn =0;
                                        while($row = mysqli_fetch_assoc($query)){
                                            $sn++;
                                            $name = $row['name'];
                                            $roll = $row['roll'];
                                            $faculty = $row['faculty'];
                                            $semester = $row['semester'];
                                            $attendance_status = $row['attendance'];
                                ?>
                                <tr>
                                    <td><?php echo $sn ;?></td>
                                    <td><?php echo $name ;?></td>
                                    <td><?php echo $roll ;?></td>
                                    <td><?php echo $faculty ;?></td>
                                    <td><?php echo $semester ;?></td>
                                    <td>
                                        <?php 
                                            if($attendance_status == 'Present'){
                                            echo '
                                            <p>
                                            <a href="#" style="
                                                text-decoration:none;
                                                color:white;
                                                background-color:rgb(46,114,255);
                                                padding: 3px 10px;
                                                border-radius: 10px;
                                                cursor: text;


                                            "
                                            >
                                            Present
                                            </a></p>';
                                                
                                            }else{
                                            echo '
                                            <p>
                                            <a href="#" style="
                                            text-decoration:none;
                                            color:white;
                                            background-color: red ;
                                            padding: 3px 10px;
                                            border-radius: 10px;
                                            cursor: text;


                                        "

                                            >
                                            Absent
                                            </a>
                                            </p>';
                                            }
                                        
                                        ?>
                                
                                    </td>
                                </tr>
                                
                                <?php 
                                    }

                                    }
                                ?>
                            </tbody>
                    </table>
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

<!-- <p style="">Present</p> -->
<!-- <p><a href="">Present</a></p> -->