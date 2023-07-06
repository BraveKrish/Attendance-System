<?php
session_start();
  require "database/db_connection.php";

  if(isset($_POST['login'])){
      $username = $_POST['username'];
      $password = $_POST['password'];


      $sqlLogin = " select * from registration where username = '$username' and 
      password = '$password' ";
      $result = mysqli_query($connection,$sqlLogin);
      
      if(mysqli_num_rows($result) == 1){
          $_SESSION['username'] = $username;
        echo '<script>alert("Login Successful!!!")</script>
        <script>window.open("index.php","_self");</script>';
      }else{
        echo '<script>alert("Login Failed!!!")</script>
        <script>window.open("login.php","_self");</script>';
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
       height: 320px;
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

            <div class="login_form">
            <div class="head">
                <h3>Teacher Login</h3>
            </div>
            <div class="login">
                <form action="" method="post">
                    <label>Username: </label>
                    <input type="text" name="username"><br>
                    <label>Password: </label>
                    <input type="text" name="password">
                    <div class="btn">
                      <input class="logbtn" type="submit" name="login" value="Login">
                    </div>
                    <p>dont have an account? <a href="register.php">register here</a></p>
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