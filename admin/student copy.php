<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Attendance System</title>
    <!-- css, bootstrap and font-awesome links -->
    <?php include "config/links.php" ?>
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
                        <li><a href="student.php">Student</a></li>
                        <!-- <li><a href="teacher.php">Teacher</a></li> -->
                        <li><a href="attendance.php">Attendance</a></li>
                        <li><a href="#">Users</a></li>
                    </ul>
                </div>


                <!-- content area -->

                <div class="main-content col-10">
                    <div class="card">
                        <div class="card-title">
                            <h4>Student Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="sub-title">
                                <h5 style="color: green;font-weight:bold;">All Students</h5>
                                <button><a style="text-decoration: none; color:white;" href="addStudent.php">Add New</a></button>
                            </div>
                            <hr style="color:black; height:4px;">
                            <div class="content-table">
                                <table class="table">
                                    <thead>
                                        <!--`id`, `student_id`, `student_name`, `roll_no`, `dob`, `student_grade_id` -->
                                        <tr>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Roll No</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Krishna Parajuli</td>
                                            <td>101</td>
                                            <td>Itahari</td>
                                            <td>
                                                <a href="#">Edit</a>
                                                <a href="#">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <?php // row end?>
        </div>   <?php // container end?>
    </section>
    <?php include "config/js_links.php" ?>
</body>

</html>