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
        <link rel="stylesheet" href="css/blog.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>
        #user,#blog,#news{
            display: none;
        }
        th{
            font-size: 20px;
            background-color: black;
            color: white;
            padding: 10px;
        }
        td{
            padding: 20px;
        }
        tr:nth-child(even){
            background-color: grey;
            color: black;
        }
        tr:nth-child(odd){
            background-color: #f0f0f0;
            color: black;
        }
        tr:hover{
            background-color: powderblue;
        }
        #section{
            margin: 20px;
            padding: 10px;
            width: 200px;
        }
        </style>
    </head>
    <body>
        <div class="header"><span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span></div>
        <div class="main">
            <div class="dash">Databases <span><a href="deshboard.php" class="btn log btn-outline-info">Dashboard</a></span>  <span><a href="logout.php" class="btn log btn-outline-danger">logout</a></span></div>
            <div align="center">
                <h3><i><q>select the table <base href=""></q></i></h3>
                <select class="btn btn-primary" id="section" onchange="change()">
                    <option class="btn btn-primary" value="user">user</option>
                    <option class="btn btn-primary" value="blog">blog</option>
                    <option class="btn btn-primary" value="news">news</option>
                </select>
                <!-- user -->
                <div  class="container jumbotron"  align="center" id="user">
                    <table width="800px" cellspacing="1" cellpadding="1">
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                $sql = "select * from user";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                ?>
                            <tr>
                               
                                <td><?php echo @$row[id]; ?></td>
                                <td><?php echo @$row[username]; ?></td>
                                <td><?php echo @$row[email];?></td>
                                <form action="#"  method="post" >
                                <td><button type="submit" class="btn btn-dark" name="delete" value="<?php echo @$row[id];?>" >Delete</button></td>
                                </form>
                            </tr>
                            <?php
                                }
                                
                                if(isset($_POST['delete']))
                                {
                                    $delete = $_POST['delete'];
                                    $del_query = "DELETE FROM `user` WHERE id='".$delete."'";
                                    if(mysqli_query($con,$del_query))
                                    {
                                        header("location : #");
                                    }
                                }
                            ?>
                        </table>
                </div>
                <!-- blog -->
                <div  class="container jumbotron"  id="blog">
                <table width="800px" cellspacing="1" cellpadding="1">
                            <tr>
                                <th>Id</th>
                                <th>title</th>
                                <th>content</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                $sql = "select * from blog";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                ?>
                            <tr>
                               
                                <td><?php echo @$row[id]; ?></td>
                                <td><?php echo @$row[title]; ?></td>
                                <td><?php echo @$row[blog];?></td>
                                <form action="#"  method="post" >
                                <td><button type="submit" class="btn btn-dark" name="delete" value="<?php echo @$row[id];?>" >Delete</button></td>
                                </form>
                            </tr>
                            <?php
                                }
                                
                                if(isset($_POST['delete']))
                                {
                                    $delete = $_POST['delete'];
                                    $del_query = "DELETE FROM `user` WHERE id='".$delete."'";
                                    if(mysqli_query($con,$del_query))
                                    {
                                        header("location : #");
                                    }
                                }
                            ?>
                        </table>
                </div>
                <!-- news -->
                <div  class="container jumbotron"  id="news">
                <table width="800px" cellspacing="1" cellpadding="1">
                            <tr>
                                <th>Id</th>
                                <th>title</th>
                                <th>content</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                $sql = "select * from news";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                ?>
                            <tr>
                               
                                <td><?php echo @$row[id]; ?></td>
                                <td><?php echo @$row[title]; ?></td>
                                <td><?php echo @$row[content];?></td>
                                <form action="#"  method="post" >
                                <td><button type="submit" class="btn btn-dark" name="delete" value="<?php echo @$row[id];?>" >Delete</button></td>
                                </form>
                            </tr>
                            <?php
                                }
                                
                                if(isset($_POST['delete']))
                                {
                                    $delete = $_POST['delete'];
                                    $del_query = "DELETE FROM `user` WHERE id='".$delete."'";
                                    if(mysqli_query($con,$del_query))
                                    {
                                        header("location : #");
                                    }
                                }
                            ?>
                        </table>
                </div>
            </div>
        </div>
        <script>
        function change(){
            var x = document.getElementById('section').value;
            if(x == "user"){
                    document.getElementById("user").style.display = " block ";
                    document.getElementById("blog").style.display = " none ";
                    document.getElementById("news").style.display = " none ";
                }
                if(x == "blog"){
                    document.getElementById("user").style.display = " none ";
                    document.getElementById("blog").style.display = " block ";
                    document.getElementById("news").style.display = " none ";
                }
                if(x == "news"){
                    document.getElementById("user").style.display = " none ";
                    document.getElementById("blog").style.display = " none ";
                    document.getElementById("news").style.display = " block ";
                }
        }
        </script>
        <script src="bootstrap/bootstarp-popper.js"></script>
        <script src="sbootstrap/bootstarp.js"></script>
        <script src="bootstrap/bootstrap-min.js"></script>
    </body>
</html>