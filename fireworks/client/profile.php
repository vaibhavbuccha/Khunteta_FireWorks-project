<?php

include('connection.php');
include('session.php');
?>
<html>
<head>
        <title>Khunteta Fireworks</title>
        <meta charset="utf-8">
        <meta name="viewpost" content="width-content initial-scale= 1">
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/profile.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <table width="100%">
            <tr>
                <td>
                <span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span>
                </td>
                <td><a href="#" class="btn btn-outline-info" >Profile</a></td>
            
                <td><button value="yblog" onclick="blog()" class="btn btn-outline-info">your Blogs</button></td>
            
                <td><button value="cblog" onclick="cblog()" class="btn btn-outline-info">Create Blogs</button></td>

                <td><a href="blog.php" class="btn btn-outline-info">Home</a></td>

                <td><a href="logout.php" class="btn btn-outline-danger">logout</a></td>
            </tr>
            
        </table>
    </div>
   <main class="container jumbotron">
        <section align="center"  id="profile">
     
        <div align="center" class="user"><i class="fa fa-user"></i></div> 
        
        <div class="uname"><?php echo $_SESSION['user'];  ?></div>
        </section>
   
        <section id="yblog">
           <div class="head">Blogs</div>
<div align="center">
            <?php
            
            $sql = "select * from blog where name='".$_SESSION['user']."'";

            $result = mysqli_query($con,$sql);

            while($row = mysqli_fetch_assoc($result))
            {
            
            ?>
            <br>
            <table class="text-center" width="800px">
            
            <tr>
                <th align="center" class="th"><h3><?php echo $row[title]; ?></h3></th>
            </tr>
            <tr>
                <td><img src="<?php echo $row[photo]; ?>" width="600px" height="350px"></td>
            </tr>
            <tr>
                <td> <p><?php echo $row[blog];?></p></td>
            </tr>
                <br>
                
            </table>
            <form action="#"  method="post" >
            <button type="submit" class="btn btn-danger" name="delete" value="<?php echo @$row[id];?>" >Delete</button>
            </form>
            <br>
            <br>
                <?php
                }
                if(isset($_POST['delete']))
                {
                    $delete = $_POST['delete'];
                    $del_query = "DELETE FROM `blog` WHERE id='".$delete."'";
                    if(mysqli_query($con,$del_query))
                    {
                        header("location : profile.php");
                    }
                }
                ?>
                </div>
        </section>
        <section id="cblog">
        <div class="top">
           <p>Create A New Blog</p>
        </div>
                <div class="cblog">
                    <table><br>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <tr>
                            <div class="title">
                                <input type="text" name="title" placeholder="Title">
                            </div>
                        </tr>
                        <tr>
                            <div>
                            <textarea name="blog" placeholder="blog" ></textarea>
                            </div>
                        </tr>
                        <tr>
                            <div>
                            <input type="file" name="img">
                            </div>
                        </tr>
                        <tr>
                            <button class="btn btn-outline-light" name="post">Post</button>
                        </tr>
                    </table>
                </div>
            </form>
       <?php
       
       if(isset($_SESSION['user']))
{
    //echo $_SESSION['user'];
    if(isset($_POST['post']))
    {
        $name = $_SESSION['user'];
        $date = date();
        $title = $_POST['title'];
        $blog = $_POST['blog'];
        $img_name = $_FILES['img']['name'];
        $img_loc = $_FILES['img']['tmp_name'];
        $img_des = "image/".$img_name;
        move_uploaded_file($_FILES['img']['tmp_name'] , $img_des);
        $sql = "insert into blog(name,title,blog,date,photo) values('".$name."','".$title."','".$blog."','".$date."','".$img_des."')";
        if(mysqli_query($con,$sql))
        {
            echo "blog is posted successfuly";
        }
        else
        {
            echo "getting error check again";
        }
    }
}
else
{
    header('location: client\login.php');
}


       ?>
        
        </section>
   </main>
    
    <script>
    function blog()
    {
        document.getElementById('yblog').style.display = "block";
        document.getElementById('cblog').style.display = "none";
    }
    function cblog()
    {
        document.getElementById('cblog').style.display = "block";
        document.getElementById('yblog').style.display = "none";
    }
    </script>
    <script src="bootstrap/bootstarp-popper.js"></script>
    <script src="sbootstrap/bootstarp.js"></script>
    <script src="bootstrap/bootstrap-min.js"></script>
</body>
</html>