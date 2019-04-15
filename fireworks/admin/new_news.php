<?php

// include connection
include ('connection.php');
error_reporting(0);
include('session.php');
?>

<html>
    <head>
        <title>Khunteta Firworks.</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/deshboard.css">
        <link rel="stylesheet" href="css/blog.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>
        .log{
            left:750px;
        }
        input{
            width:300px;
            height: 30px;
            text-align: center;
            margin: 20px;
            border-radius: 10px;
            background: #F0f0f0;
        }
        textarea{
            width:300px;
            height: 200px;
            text-align: center;
            margin: 20px;
            border-radius: 10px;
            background: #F0f0f0;
        }
        </style>
    </head>
    <body>
        <div class="header"><span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span></div>
        <div class="main">
            <div class="dash">Update News <span><a href="deshboard.php" class="btn log btn-outline-info">Dashboard</a></span> <span><a class="btn log btn-outline-info" href="news.php">Updated News</a></span> <span><a href="logout.php" class="btn log btn-outline-danger">logout</a></span></div>
            <div class="container jumbotron" align="center">
            <h4><q><i>Create A New News</i></q></h4>
            <form action="#"  method="post" >
                <div class="blog">
                        <input type="text" name="title" placeholder="Title Of News">
                       <br>
                        <textarea name="content" placeholder="news"></textarea>
                        <br>
                    <td><button type="submit" class="btn btn-outline-success" name="update" >Post</button></td>
                    </form>
                        
                </div>
                <?php
                    if(isset($_POST['update']))
                    {
                        $title = $_POST['title'];
                        $news = $_POST['content'];
                        $sql = "INSERT INTO `news`(`title`, `content`) VALUES ('".$title."','".$news."')";
                        if(mysqli_query($con,$sql))
                        {
                            echo '<P class="btn btn-primary">Success</P>';
                            //header("location : news.php");
                        }
                        else{
                            echo '<P class="btn btn-danger">error</P>';
                        }
                    }
                ?>
            </div>
        </div>
</body>
</html>
