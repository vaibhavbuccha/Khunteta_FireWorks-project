<?php

// include connection
include ('connection.php');
include('session.php');

?>

<html>
    <head>
        <title>Khunteta Firworks.</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/deshboard.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="header"><span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span></div>
        <div class="main">
            <div class="dash">Dashboard <span><a href="logout.php" class="btn log btn-danger">logout</a></span></div>
            <div align="center">
                <table align="center" width="1000px">
                    <tr>
                        <td><a href="content.php">
                            <div class="box clr">
                                <p>Content</p><br>
                                <span class="fas fa-desktop"></span>
                            </div></a>
                        </td>
                        <td><a href="user.php">
                            <div class="box clr2">
                            <p>User</p><br>
                                <span class="fas fa-User"></span>
                            </div></a>
                        </td>
                        <td><a href="database.php">
                            <div class="box clr3">
                            <p>Database</p><br>
                                <span class="fas fa-database"></span>
                            </div></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="blog.php">
                        <div class="box clr4">
                        <p>Blog</p><br>
                                <span class="fas fa-blog"></span>
                        </div></a>
                        </td>
                        <td><a href="news.php">
                        <div class="box clr5">
                        <p>News</p><br>
                                <span class="fab fa-accusoft"></span>
                        </div></a>
                        </td>
                        <td><a href="">
                        <div class="box clr6"></div></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script src="bootstrap/bootstarp-popper.js"></script>
        <script src="sbootstrap/bootstarp.js"></script>
        <script src="bootstrap/bootstrap-min.js"></script>
    </body>
</html>