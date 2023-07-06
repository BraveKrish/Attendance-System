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
                </div>


                <!-- content area -->

                <div class="main-content col-10">
                    <div class="card">
                        <div class="card-title">
                            <h4>Semester</h4>
                        </div>
                        <div class="card-body">
                            <div class="sub-title">
                                <h5 style="color: green; font-weight:bold;"></h5>
                                
                            </div>
                            <hr style="color:black; height:4px;">
                            <div class="content-table">
                                <table class="table">
                                    <thead>
                                        <!--`id`, `grade_id`, `grade_name`` -->
                            
                                        <tr> 
                                            <th scope="col">Semester</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       $sql = " select * from grade_tbl ";
                                       $semQuery = mysqli_query($connection,$sql) or die("query faild");
                                       $num = mysqli_num_rows($semQuery);
                                      // echo $num;
                                       if($num > 0){
                                           // `grade_name`
                                           while($row=mysqli_fetch_assoc($semQuery)){
                                                $id = $row['grade_id'];
                                               $sem_name = $row['grade_name'];
                                    ?>
                                        <tr>
                                            <td><?php echo $sem_name; ?></td>
                                            <td>
                                                <a href='updateSemester.php?esem_id=<?php echo $id; ?>'>Edit</a>
                                                <a href="deleteSem.php?dsem_id=<?php echo $id; ?>">Delete</a>
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
                        <div class="card mt-4">
                        <div class="card-body">
                        <h5 style="color: green; font-weight:bold;">Add New Semester</h5>
                                <div class="teacher-form">
                                    <form action="form_action.php" method="POST">
                                        <div class="form-row">
                                            <div class="form-group text-left col-md-6">
                                                <label>Semester</label>
                                                <input type="text" name="grade_name" class="form-control">
                                            </div>
                                        </div>
                                </div>
                                        <button type="submit" name="grade_submit" class="btn btn-primary">Save</button>
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