<?php

// include connection
include ('connection.php');


?>

<html>
    <head>
        <title>Khunteta Firworks.</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/signup.css">
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
error_reporting(1);
$con = mysqli_connect("localhost","root","","fireworks") ;

if($con)
{
    if(isset($_POST['signup']))
    {
        $username = mysqli_real_escape_string($con,$_POST['uname']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['pass']);
        $password_1 = md5($password);
        $errors= array();
        if(empty($username))
        {
           array_push($errors,'<p style="color: red; border: 1px solid red">username is required</p>');
           echo '<p style="color: red; border: 1px solid red">username is required</p>';
        }
        if(empty($email))
        {
           array_push($errors,'<p style="color: red; border: 1px solid red">email is required</p>');
           echo '<p style="color: red; border: 1px solid red">email is required</p>';
        }
        if(empty($password))
        {
           array_push($errors,'<p style="color: red; border: 1px solid red">password is required</p>');
           echo '<p style="color: red; border: 1px solid red">password is required</p>';
        }

        $user_check_query = "SELECT * FROM user WHERE username ='".$username."'OR email='".$email."' LIMIT 1";
        if(mysqli_query($con,$user_check_query)==false)
        {
            array_push($errors,'<p style="color: red; border: 1px solid red">the username and email is always registered </p>');
            echo '<p style="color: red; border: 1px solid red">the username and email is always registered </p>';
        }

        
        if(Count($errors)==0)
        {   
            $query = "INSERT INTO user(username, email, password) VALUES ('$username','$email','$password_1')";
            if(mysqli_query($con,$query))
            {
                echo '<p style="color: green; border: 1px solid green">you are registered now you can login <a href="login.php">click here!</a></p>';
            }
            else
            {
                foreach($errors as $error)
                {
                    echo '$error';
                }
            }
        }
        

        

    }
}


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
                            <input type="text" placeholder="Email" required name="email">
                          </td>
                      </tr>
                      <tr>
                         
                          <td>
                          <input type="password" placeholder="Password" required name="pass">
                          </td>
                      </tr>
                      <tr>
                          <td>
                          <button type="submit" class="btn btn-info" name="signup">Signup</button>
                          </td>
                      </tr>
                  </table>
                </form>
                <a href="login.php">Already Have An Account</a>
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
<input type="text" name="uname" required>
<input type="email" name="email">
<input type="password" name="pass">
<input type="submit" name="signup">
</form>
<a href="login.php">login</a>
</body>
</html>
-->
