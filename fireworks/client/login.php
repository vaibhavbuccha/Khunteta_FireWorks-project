<?php

// include connection
include ('connection.php');


?>

<html>
    <head>
        <title>Khunteta Firworks.</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <div class="circle4"></div>
        <div class="login-box">
            <div class="header"><span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span></div>
            <div align="center" class="form">
            <?php

if(isset($_POST['login']))
 {
     $username = mysqli_real_escape_string($con,$_POST['uname']);
     $password = mysqli_real_escape_string($con,$_POST['pass']);
     $password_1 = md5($password);
     $errors= array();
     if(empty($username))
     {
        array_push($errors,'<p style="color: red; border: 1px solid red">username is required</p>');
        echo '<p style="color: red; border: 1px solid red">username is required</p>';
     }
     if(empty($password))
     {
        array_push($errors,'<p style="color: red; border: 1px solid red">password is required</p>');
        echo '<p style="color: red; border: 1px solid red">password is required</p>';
     }

     if(count($errors)==0)
     {
         $sql = "SELECT * FROM user WHERE username ='".$username."'AND password='".$password_1."' LIMIT 1";
         $result = mysqli_query($con,$sql);
         if(mysqli_num_rows($result)==1)
         {   
             $_SESSION['user'] = $username;
             echo '<p style="color: green; border: 1px solid green">welcome!</p>';
             header('Location: blog.php');
         }
         else
         {
             echo '<p style="color: red; border: 1px solid red">wrong username password try again</p>';
         }
     }
    
 }

/*
$con = mysqli_connect("localhost","root","","way2shopping");

if(isset($_POST['login']))
{
 $username = mysqli_real_escape_string($con,$_POST['username']);
 $password = mysqli_real_escape_string($con,$_POST['password']);
 $password_1 = md5($password);
 $sql = "SELECT * FROM user WHERE username ='".$username."'AND password='".$password_1."' LIMIT 1";
 $result = mysqli_query($con,$sql);
 if(mysqli_num_rows($result)==1)
 {
     echo "welcome";
     exit();
 }
 else
 {
     echo " there is some issue";
 }
}
*/


?>




                <form action="#" method="post">
                  <table>
                      <tr>
                          
                          <td>
                            <input type="text" placeholder="Username" required name="uname">
                          </td>
                      </tr>
                      <tr>
                         
                          <td>
                          <input type="password" placeholder="Password" required name="pass">
                          </td>
                      </tr>
                      <tr>
                          <td>
                          <button type="submit" class="btn btn-info" name="login">Login</button>
                          </td>
                      </tr>
                  </table>
                </form>
                <a href="signup.php">Create A New Account</a>
            </div>
        </div>
        <script src="bootstrap/bootstarp-popper.js"></script>
        <script src="sbootstrap/bootstarp.js"></script>
        <script src="bootstrap/bootstrap-min.js"></script>
    </body>
</html>
<!--
<html>
<body>
<form action="#" method="post">
<input type="text" name="uname">
<input type="password" name="pass">
<input type="submit" name="login">
</form>
<a href="signup.php">signup</a>
</body>
</html>
-->
