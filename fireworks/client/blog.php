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
        <link rel="stylesheet" href="css/blog.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="header container-fluid">
            <span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span>
        </div>
        <div style="padding: 10px;" class="main jumbotron">
            <table width="100%">
                <tr>
                    <td>
                        <div class="profile">
                            <!---this is the area for profile info-->
                            <div align="center">
                                <span class="fa fa-user"></span><br>
                                <span class="uname"><?php echo $_SESSION['user'];?></span>
                                <br>
                                <br>
                                <button class="btn btn-outline-info"><span class="fa fa-align-center"></span><a href="profile.php#cblog">Create Blog</a> </button>
                                <br>
                                <br>
                                <button class="btn btn-outline-info"><span class="fa fa-blog"></span> <a href="profile.php#yblog">Your Blog</a> </button>
                                <br>
                                <br>
                                <button class="btn btn-outline-info"><span class="fa fa-edit"></span> <a href="profile.php">Edit Profile</a></button>
                                <br>
                                <br>
                                <button class="btn btn-outline-danger"><span class="fa fa-logout"></span><a href="logout.php">logout</a></button>
                            </div>
                        
                        </div>
                    </td>
                    <td>
                        <div class="blog container">
                             <div class="bloghead">
                                 <table  width="100%" align="center">
                                     <tr>
                                         <td>
                                                <span class="fa fa-blog"><a href="#">Blog</a></span>
                                         </td>
                                         <td>
                                                <span class="fa fa-product"><a href="">Product</a></span>
                                         </td>
                                         <td>
                                                <span class="fa fa-gallery"><a href="">Gallery</a></span>
                                         </td>
                                         <td>
                                                <span class="fa fa-about"><a href="">about</a></span>
                                         </td>
                                     </tr>
                                 </table>
                               
                             </div>
                            <div class="blogcon">
                                <!---this is the area for blog-->
                                <div style="overflow:scroll;">
                               <?php
                                $sql = "select * from blog";

                                    $result = mysqli_query($con,$sql);

                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        ?>
                                    <table width="400px;">
                                        <tr>
                                        <?php// echo @$row[id] ; ?><br>
                                        </tr>
                                        <tr>
                                        <?php echo '<h3 style="color: white; background-color: blue; padding: 10px;">'. @$row[title] .'</h3>'; ?><br>
                                        </tr>
                                        <tr>
                                        <img style="background: linear-gradient(#833ab479,#1d1dfd7e);" src="<?php  echo @$row[photo]; ?>" width="100%" height="400px">
                                        </tr>
                                        <br>
                                        <tr>
                                        <p style="padding: 30px; text-align:center;
                                        background: linear-gradient(#833ab479,#1d1dfd7e);
                                        color: white;">
                                            <?php echo @$row[blog] ;?>
                                        </p>
                                        
                                        </tr>
                                        
                                        <tr>
                                        <p style="padding: 30px;top:-20px; position:relative ; text-align:center;
                                        background: linear-gradient(#833ab479,#1d1dfd7e);
                                        color: white;">
                                        <?php echo "By:- ".@$row[name]."<br><br>" ; }?>
                                    </p>
                                        </tr>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div align="center" class="notify">
                            <!---this is the area for notification-->
                            <h4>Notifications:</h4>
                            <div class="news">
                            <table>
                            <?php
                            
                            $sql2 = "select * from news";

                                    $result2 = mysqli_query($con,$sql2);

                                    while($row2 = mysqli_fetch_assoc($result2))
                                    {

                            ?>
                            <div class="news1">
                                <tr>
                                    <th class="th"><?php echo $row2[title] ;?></th>
                                </tr>
                                <tr>
                                    <td class="td"><?php echo $row2[content]; ?><br><br></td>
                                </tr>
                            </div>
                                <?php 
                                    }
                                    ?>
                                
                            </table>
                            
                           
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
            <script src="bootstrap/bootstarp-popper.js"></script>
            <script src="sbootstrap/bootstarp.js"></script>
            <script src="bootstrap/bootstrap-min.js"></script>
    </body>
</html>