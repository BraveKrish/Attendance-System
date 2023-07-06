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
                    </ul>
                </div>


                <!-- content area -->

                <div class="main-content col-10">
                    <div class="card">
                        <div class="card-title">
                            <h4>Faculty</h4>
                        </div>
                        <div class="card-body">
                            <div class="sub-title">
                                <h5 style="color: green; font-weight:bold;">All Faculty</h5>
                            </div>
                            <hr style="color:black; height:4px;">
                            <div class="content-table">
                                <table class="table">
                                    <thead>
                                        <tr> 
                                            <th scope="col">Faculty Name</th>
                                            <th scope="col">Duration(Month)</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                       $sql = " select * from faculty ";
                                       $facultyQuery = mysqli_query($connection,$sql) or die("query faild");
                                       $num = mysqli_num_rows($facultyQuery);
                                      // echo $num;
                                       if($num > 0){
                                           //`faculty_id`, `faculty_name`, `duration
                                           while($row=mysqli_fetch_assoc($facultyQuery)){
                                                $id = $row['faculty_id'];
                                               $fac_name = $row['faculty_name'];
                                               $duration = $row['duration'];
                                    ?>
                                        <tr>
                                            <td><?php echo $fac_name; ?></td>
                                            <td><?php echo $duration; ?></td>
                                            <td>
                                                <!-- <a href="updateFaculty.php?id=<?php //echo $id;?>">Edit</a> -->
                                                <a href="deleteFac.php?did=<?php echo $id;?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php }
                                       }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                            

                        </div>
                        <div class="card mt-4">
                        <div class="card-body">
                        <h5 style="color: green; font-weight:bold;">Add New Faculty</h5>
                                <div class="teacher-form">
                                    <form action="form_action.php" method="POST">
                                        <div class="form-row">
                                            <div class="form-group text-left col-md-6">
                                                <label>Faculty</label>
                                                <input type="text" name="faculty_name" class="form-control">
                                            </div>
                                            <div class="form-group text-left col-md-6">
                                                <label>Duration</label>
                                                <input type="text" name="faculty_duration" class="form-control">
                                            </div>
                                        </div>
                                </div>
                                        <button type="submit" name="faculty_submit" class="btn btn-primary">Save</button>
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