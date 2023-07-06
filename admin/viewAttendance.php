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
                                <div class="col-8">
                                <table class="table">
                                <h4>View Attendance Record</h4>
                                    <thead>
                                    <tr> 
                                        <th scope="col">SN</th>
                                        <th scope="col">Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                           $show = mysqli_query($connection," select distinct date from attendance " );
                                           $sn = 0;
                                           while($row = mysqli_fetch_assoc($show)){
                                               $sn++;
                                               $date = $row['date'];
                                           
                                        ?>
                                        <tr>
                                            <td><?php echo $sn; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td>
                                                <form action="attend.php" method="POST">
                                                    <input type="hidden" value="<?php echo $date; ?>" name="date">
                                                    <input style="
                                                    color: white;
                                                    background-color:rgb(13,174,5);
                                                    padding:0 15px;
                                                    border:none;
                                                    outline:none;
                                                    "  type="submit" name="view" value="View">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php 
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