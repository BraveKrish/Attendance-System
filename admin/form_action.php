<?php
require "database/db_connection.php";
require "function.php";

// insert grade
if(isset($_POST['grade_submit'])){
    //`id`, `grade_id`, `grade_name`
    // $grade_id = $_POST['grade_id'];
    $grade_name = $_POST['grade_name'];

    $sql = " insert into grade_tbl(grade_name) values('$grade_name') ";
    $result = mysqli_query($connection,$sql) or die("query faild");

    if($result){
        echo '<script>alert("one item inserted successfully")</script>
        <script>window.open("grade.php","_self")</script>';
    }else{
        echo '<script>alert("Insertion faild")</script>
        <script>window.open("grade.php","_self")</script>';
    }

}
// faculty insertion
if(isset($_POST['faculty_submit'])){
   // `faculty_id`, `faculty_name`, `duration`
    $fac_name = $_POST['faculty_name'];
    $fac_duration = $_POST['faculty_duration'];

    $sql = " insert into faculty(faculty_name,duration) values('$fac_name','$fac_duration') ";
    $fac_result = mysqli_query($connection,$sql) or die("query faild");

    if($fac_result){
        echo '<script>alert("one item inserted successfully")</script>
        <script>window.open("faculty.php","_self")</script>';
    }else{
        echo '<script>alert("Insertion faild")</script>
        <script>window.open("faculty.php","_self")</script>';
    }

}
 // attendance insertion
    if(isset($_POST['student_submit'])){
       // `id`, `att_date`, `student_name`, `faculty`, `semester`, `attendance_status`
        $roll = $_POST['roll'];
        $student_name = $_POST['student_name'];
        $faculty = $_POST['faculty'];
        $semester = $_POST['semester'];

        $sql = " insert into students_tbl(roll,student_name,faculty,semester) values('$roll','$student_name','$faculty','$semester') ";
        $att_result = mysqli_query($connection,$sql) or die("query faild");

        if($att_result){
            echo '<script>alert("one item inserted successfully")</script>
            <script>window.open("index.php","_self")</script>';
        }else{
            echo '<script>alert("Insertion faild")</script>
            <script>window.open("index.php","_self")</script>';
        }

}


if(isset($_POST['take_attend']) || isset($_POST['attendance_status'])){
    $status = $_POST['attendance_status'];
    foreach($status as $id => $attendance_status){
       $date = $_POST['att_date'];
       $name = $_POST['name'] [$id];
       $rollNo = $_POST['roll'] [$id];

    //    echo $date.' '. $name . ' '. $roll . ' ' . $attendance_status;
    //    exit;
    
    $result = mysqli_query($connection," insert into attendance(name,roll,attendance,date) values('$name','$rollNo','$attendance_status','$date') ");

    if($result){
        echo '<script>alert("one item inserted successfully")</script>
        <script>window.open("index.php","_self")</script>';
    }else{
        echo '<script>alert("Insertion faild")</script>
        <script>window.open("index.php","_self")</script>';
    }
    }
}

?>