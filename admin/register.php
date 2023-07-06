<?php
  require "database/db_connection.php";
  //<!-- full_name,email,username,password,register -->
  if(isset($_POST['register'])){
      $full_Name = $_POST['full_name'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql = " select * from registration where username = '$username' ";
      $runQuery = mysqli_query($connection,$sql) or die("query faild");
      $num = mysqli_num_rows($runQuery);
      if($num > 0){
          echo '<script>alert("Sorry Username Alerady Exits!!!")</script>
          <script>window.open("register.php","_self");</script>';
          
      }else{
          $sql1 = " insert into registration(name,email,username,password) 
          values('$full_Name','$email','$username','$password') ";
          //echo $sql1; exit;
          $result = mysqli_query($connection,$sql1);

          if($result){
            echo '<script>alert("Registration Successful!!!")</script>
            <script>window.open("login.php","_self");</script>';
        
        }else{
            echo '<script>alert("Registration Failed!!!")</script>';
            header("location:registration.php"); 
           // echo $msg;
          }
         // $msg = "Registration Successful..";
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
   #sidebar .container .login_form{
       background-color: white;
       height: 450px;
       width: 45%;
       margin-top: 40px;
       margin-left: 300px;
       padding-left: 30px;
   }
   #sidebar .container .login_form h3{
       color: black;
       margin: 15px;
       padding:  15px ;
       text-align: center;
   }
   #sidebar .container .login_form .login{
       margin: 0 100px;
   }
   #sidebar .container .login_form .login label{
       color: black;
       font-weight: bold;
   }
   #sidebar .container .login_form .login input{
       padding: 0 45px;
   }
   #sidebar .container .login_form .login .btn{
       display: flex;
       justify-content: center;
   }
   #sidebar .container .login_form .login .btn .logbtn{
       color: white;
       font-size: 18px;
       font-weight: bold;
       background-color: green;
       border: none;
       padding: 5px 50px;
       text-align: center;
       margin: 10px 0;
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
            <div class="col">

            <div class="message">
            </div>
            <div class="login_form">
            <div class="head">
                <h3>Teacher Registration</h3>
            </div>
            <div class="login">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <!-- full_name,email,username,password,register -->
                    <label>Full Name: </label>
                    <input type="text" name="full_name"><br>
                    <label>Email: </label>
                    <input type="text" name="email"><br>
                    <label>Username: </label>
                    <input type="text" name="username"><br>
                    <label>Password: </label>
                    <input type="text" name="password">
                    <div class="btn">
                      <input class="logbtn" type="submit" name="register" value="Register">
                    </div>
                    <p>already have an account? <a href="login.php">login here</a></p>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
   </section>
<?php include "config/js_links.php"?>
</body>
</html>