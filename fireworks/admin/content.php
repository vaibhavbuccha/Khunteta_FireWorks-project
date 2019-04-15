
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
        <!-- <link rel="stylesheet" href="css/content.css"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>
        .cblog{
    height: 500px;
    width: 100%;
    text-align: center;
    background: whitesmoke;
    overflow: scroll;
}
.top{
    text-align: center;
    font-size: 25px;
    padding: 20px;
    background-color: #fd1d4b;
    color: white;
}
.title{
    margin:50px auto 0;
}
input{
    width: 400px;
    text-align: center;
    margin: 20px 0px;
    border-radius: 10px;
    background: rgb(238, 229, 229);
    color: black;
}
textarea{
    width: 400px;
    text-align: center;
    border-radius: 10px;
    height: 200px;
    background:rgb(238, 229, 229);
    color: black;
}

#blog,#product,#gallery,#about{
    display: none;
}
        </style>
    </head>
    <body>
        <div class="header"><span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span></div>
        <div class="main">
            <div class="dash">Content <span><a href="deshboard.php" class="btn log btn-outline-info">Dashboard</a></span>  <span><a href="logout.php" class="btn log btn-outline-danger">logout</a></span></div>
                <div class="container jumbotron text-center">
                    <h3><i><q>Select The Field From The List Which You Want To Update</q></i></h3>
                    <i><q>From Here You Can Change The Content Of The Website</q></i><br>
                    <button class="btn btn-outline-primary">
                        <select class="btn btn-primary" id="change" onchange="change()">
                            <option value="Blog">Blog</option>
                            <option value="product">product</option>
                            <option value="gallery">gallery</option>
                            <option value="about">about</option>
                        </select>
                    </button>
                </div>
                <!-- Blogs -->
                <div id="blog">
                    <div id="Blog1" class="jumbotron container text-center">
                        <h3>Blog1</h3><br>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <input name="blog1_title" type="text" placeholder="Blog Title" >
                            <br>
                            <textarea name="blog1_content" placeholder="Blog Content"></textarea>
                            <br>
                            <input name="blog1_img" type="file" ><br>
                            <button type="submit" class="btn btn-warning" name="blog1_update">Update</button>
                        </form>
                    </div>

                    <div id="Blog2" class="jumbotron container text-center">
                        <h3>Blog2</h3><br>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <input name="blog2_title" type="text" placeholder="Blog Title" >
                            <br>
                            <textarea name="blog2_content" placeholder="Blog Content"></textarea>
                            <br>
                            <input name="blog2_img" type="file" ><br>
                            <button type="submit" class="btn btn-warning" name="blog2_update">Update</button>
                        </form>
                    </div>
                
                    <div id="Blog3" class="jumbotron container text-center">
                        <h3>Blog3</h3><br>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <input name="blog3_title" type="text" placeholder="Blog Title" >
                            <br>
                            <textarea name="blog3_content" placeholder="Blog Content"></textarea>
                            <br>
                            <input name="blog3_img" type="file" ><br>
                            <button type="submit" class="btn btn-warning" name="blog3_update">Update</button>
                        </form>
                    </div>

                </div>
                <!-- blogs end here -->

                <!-- product -->
                <div id="product">
                <div id="product1" class="jumbotron container text-center">
                    <h3>Product1</h3><br>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input name="product1_name" type="text" placeholder="Product Name">
                        <br>
                        <input name="product1_img" type="file" ><br>
                        <button type="submit" class="btn btn-warning" name="product1_update">Update</button>
                    </form>
                </div>

                <div id="product2" class="jumbotron container text-center">
                    <h3>Product2</h3><br>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input name="product2_name" type="text" placeholder="Product Name">
                        <br>
                        <input name="product2_img" type="file" ><br>
                        <button type="submit" class="btn btn-warning" name="product2_update">Update</button>
                    </form>
                </div>

                <div id="product3" class="jumbotron container text-center">
                    <h3>Product3</h3><br>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input name="product3_name" type="text" placeholder="Product Name">
                        <br>
                        <input name="product3_img" type="file" ><br>
                        <button type="submit" class="btn btn-warning" name="product3_update">Update</button>
                    </form>
                </div>
                </div>
                <!--product end here  -->

                <!-- Gallery -->
                <div id="gallery">
                <div id="img1" class="jumbotron container text-center">
                    <h3>Gallery Image 1</h3><br>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input name="Gallery1" type="file" ><br>
                        <button type="submit" class="btn btn-warning" name="image1_update">Update</button>
                    </form>
                </div>

                <div id="img2" class="jumbotron container text-center">
                    <h3>Gallery Image 2</h3><br>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input name="Gallery2" type="file" ><br>
                        <button type="submit" class="btn btn-warning" name="image2_update">Update</button>
                    </form>
                </div>

                <div id="img2" class="jumbotron container text-center">
                    <h3>Gallery Image 3</h3><br>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input name="Gallery3" type="file" ><br>
                        <button type="submit" class="btn btn-warning" name="image3_update">Update</button>
                    </form>
                </div>
                </div>
                <!-- Gallery end here! -->

                <!-- about us -->
                <div id="about" class="jumbotron container text-center">
                    <h3>About Us</h3><br>
                    <form action="#" method="post">
                        <textarea name="about" placeholder="About"></textarea>
                        <br>
                        <button type="submit" class="btn btn-warning" name="about_update">Update</button>
                    </form>
                </div>

                <!-- about end here! -->
            </div>
        </div>
        </div>

        <?php
        
        // blog1
        if(isset($_POST['blog1_update']))
        {
            $title = $_POST['blog1_title'];
            $blog = $_POST['blog1_content'];
            $img_name = $_FILES['blog1_img']['name'];
            $img_loc = $_FILES['blog1_img']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['blog1_img']['tmp_name'] , $img_des);
            $sql = "UPDATE `admin_blog` SET `title`='".$title."',`blog`='".$blog."',`img`='".$img_des."' WHERE id='1' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }
        }

        // blog 2
        if(isset($_POST['blog2_update']))
        {
            $title = $_POST['blog2_title'];
            $blog = $_POST['blog2_content'];
            $img_name = $_FILES['blog2_img']['name'];
            $img_loc = $_FILES['blog2_img']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['blog2_img']['tmp_name'] , $img_des);
            $sql = "UPDATE `admin_blog` SET `title`='".$title."',`blog`='".$blog."',`img`='".$img_des."' WHERE id='2' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }
        }

        // blog3
        if(isset($_POST['blog3_update']))
        {
            $title = $_POST['blog3_title'];
            $blog = $_POST['blog3_content'];
            $img_name = $_FILES['blog3_img']['name'];
            $img_loc = $_FILES['blog3_img']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['blog3_img']['tmp_name'] , $img_des);
            $sql = "UPDATE `admin_blog` SET `title`='".$title."',`blog`='".$blog."',`img`='".$img_des."' WHERE id='3' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }

        }

        // product1
        if(isset($_POST['product1_update']))
        {
            $title = $_POST['product1_name'];
            $img_name = $_FILES['product1_img']['name'];
            $img_loc = $_FILES['product1_img']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['product1_img']['tmp_name'] , $img_des);
            $sql = "UPDATE `product` SET `name`='".$title."',`image`='".$img_des."' WHERE id='1' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }
        }
        if(isset($_POST['product2_update']))
        {
            $title = $_POST['product2_name'];
            $img_name = $_FILES['product2_img']['name'];
            $img_loc = $_FILES['product2_img']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['product2_img']['tmp_name'] , $img_des);
            $sql = "UPDATE `product` SET `name`='".$title."',`image`='".$img_des."' WHERE id='2' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }
        }
        // product3
        if(isset($_POST['product3_update']))
        {
            $title = $_POST['product3_name'];
            $img_name = $_FILES['product3_img']['name'];
            $img_loc = $_FILES['product3_img']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['product3_img']['tmp_name'] , $img_des);
            $sql = "UPDATE `product` SET `name`='".$title."',`image`='".$img_des."' WHERE id='3' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }
        }
        if(isset($_POST['image1_update']))
        {
            $img_name = $_FILES['Gallery1']['name'];
            $img_loc = $_FILES['Gallery1']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['Gallery1']['tmp_name'] , $img_des);
            $sql = "UPDATE `gallery` SET `image`='".$img_des."' WHERE id='1' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }
        }
        if(isset($_POST['image2_update']))
        {
            $img_name = $_FILES['Gallery2']['name'];
            $img_loc = $_FILES['Gallery2']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['Gallery2']['tmp_name'] , $img_des);
            $sql = "UPDATE `gallery` SET `image`='".$img_des."' WHERE id='2' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }
        }
        if(isset($_POST['image3_update']))
        {
            $img_name = $_FILES['Gallery3']['name'];
            $img_loc = $_FILES['Gallery3']['tmp_name'];
            $img_des = "../client/image/".$img_name;
            move_uploaded_file($_FILES['Gallery3']['tmp_name'] , $img_des);
            $sql = "UPDATE `gallery` SET `image`='".$img_des."' WHERE id='3' ";
            if(mysqli_query($con,$sql))
            {
                echo "blog is posted successfuly";
            }
            else
            {
                echo "getting error check again";
            }
        }
        if(isset($_POST['about_update']))
        {
            $about = $_POST['about'];
            $update = "UPDATE `about` SET `about`='".$about."' WHERE id='1'";
            if(mysqli_query($con,$update))
            {
                echo " success";
            }
            else
            {
                echo "getting error";
            }
        }
        
        
        
        ?>

        <script>
        
            function change(){
                var x = document.getElementById('change').value;
                if(x == "Blog")
                {
                    document.getElementById('blog').style.display = "block";
                    document.getElementById('product').style.display = "none";
                    document.getElementById('gallery').style.display = "none";
                    document.getElementById('about').style.display = "none";
                }
                if(x == "product")
                {
                    document.getElementById('blog').style.display = "none";
                    document.getElementById('product').style.display = "block";
                    document.getElementById('gallery').style.display = "none";
                    document.getElementById('about').style.display = "none";
                }
                if(x == "gallery")
                {
                    document.getElementById('blog').style.display = "none";
                    document.getElementById('product').style.display = "none";
                    document.getElementById('gallery').style.display = "block";
                    document.getElementById('about').style.display = "none";
                }
                if(x == "about")
                {
                    document.getElementById('blog').style.display = "none";
                    document.getElementById('product').style.display = "none";
                    document.getElementById('gallery').style.display = "none";
                    document.getElementById('about').style.display = "block";
                }
            }
        
        </script>
        <script src="bootstrap/bootstarp-popper.js"></script>
        <script src="sbootstrap/bootstarp.js"></script>
        <script src="bootstrap/bootstrap-min.js"></script>
    </body>
</html>





























