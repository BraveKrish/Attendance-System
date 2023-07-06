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
  .sub-title
    {
        display: inline;
        justify-content: space-between;
    }
 .sub-title button{
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

   <section>
       <div class="container">
           <div class="row">
               <div class="col-12">
               <div class="card mt-3">
                        <div class="form-col card-body">
                             <div class="sub-title">
                                <h5 style="color: green; font-weight:bold;">Add New Student</h5>
                                <button><a style="text-decoration: none; color:white;" href="index.php">Go Back</a></button>
                            </div>
                            <hr style="color:black; height:4px;">
                            <div class="teacher-form">
                                <form action="form_action.php" method="POST">
                                      <!--`id`, `student_id`, `student_name`, `roll_no`, `dob`, `student_grade_id` -->
                                    <div class="form-row">
                                        <div class="form-group text-left col-md-6">
                                            <label>Student Name</label>
                                            <input type="text" name="teacher_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-left col-md-6">
                                            <label>Roll No</label>
                                            <input type="number" name="email" class="form-control">
                                        </div>
                                        <div class="form-group text-left col-md-4">
                                            <label>Semester</label>
                                            <select name="teacher_grade_id" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Grade 10</option>
                                                <option>Grade 11</option>
                                                <option>Grade 12</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-left col-md-4">
                                            <label>Faculty</label>
                                            <select name="teacher_grade_id" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Grade 10</option>
                                                <option>Grade 11</option>
                                                <option>Grade 12</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" name="student_submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
               </div>
           </div>
       </div>
   </section>


               