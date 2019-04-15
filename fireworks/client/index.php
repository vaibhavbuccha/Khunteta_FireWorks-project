
<?php

include('connection.php');


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Khunteta Fireworks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="js/main.js"></script>
    <style>
    .sp2{
        position: relative;
        left: -20px;
    }
    </style>
</head>
<body>
    <div class="navbar">
        <span class="sp1">K</span><span class="sp2">hunteta</span><span style="position: relative;
        left: -20px;" class="sp1">F</span><span style="left:-40px;" class="sp2">ireworks</span>
        <span class="home"><a href="#">Home</a></span><span class="nav"><a href="#about">About us</a></span> <span class="nav"><a href="#blog">Blog</a></span> <span class="nav" ><a href="#gallery">Gallery</a></span> <span class="nav"><a href="#product">Products</a></span> <span class="nav"><a href="#contact">Contact us</a></span><span class="nav"><a href="login.php">Login</a></span>
    </div>
    <div class="top">
        <br>
        <div class="top-text">
            <span class="sp3">K</span><span class="sp4">hunteta</span> <span class="sp3">F</span><span class="sp4">ire</span><span class="sp4">works</span>
            <p class="tag"><q>this is tag line</q></p>
        </div><br>
        <div id="about" class="top2">
            <br>
            <div class="header">
                    <span class="sp5">A</span><span class="sp6">bout</span> <span class="sp5">U</span><span class="sp6">s</span>
            </div>
            <div>
                <table>
                    <tr>
                        <td><div > <img class="img-abt" src="https://content3.jdmagicbox.com/comp/dausa/c1/9999p1427.1427.160913213034.y4c1/catalogue/khunteta-phataka-shop-dausa-town-dausa-fire-cracker-dealers-19smgbnq6e.jpg" width="300px" ></div></td>
                        <td><div class="line"></div></td>
                        <td><div class="abt">
                            <h2>Khunteta Fireworks</h2>
                            <?php
                            
                            $select1 = "select * from about where id='1' ";
                            $result1 = mysqli_query($con , $select1);
                            while($row = mysqli_fetch_array($result1))
                            {
                            ?>
                            <p><?php echo $row[about]; ?> </p>
                            <?php } ?>
                        </div></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="blog">
                <br>
                <div class="header">
                        <span class="sp5">B</span><span class="sp6">log</span>
                </div>
                <div align="center">
                    <table  >
                        <tr>
                            <td>
                                <div class="b1">
                                <?php
                            
                            $select2 = "select * from admin_blog where id='1' ";
                            $result2 = mysqli_query($con , $select2);
                            while($row = mysqli_fetch_array($result2))
                            {
                            ?>
                                    <div>
                                        <img class="bimg" src="<?php echo $row[img] ;?>">
                                    </div>
                                    <br>
                                  
                                    <div align="center">
                                        <h3><?php echo $row[title] ;?></h3>
                                        <br>
                                        <p><?php echo $row[blog] ;}?></p>
                                    </div>
                                </div>
                            </td>
                            
                            <td>
                                <div class="b1">
                                        <div>
                                        <?php
                            
                            $select3 = "select * from admin_blog where id='2' ";
                            $result3 = mysqli_query($con , $select3);
                            while($row = mysqli_fetch_array($result3))
                            {
                            ?>
                                                <img class="bimg" src="<?php echo $row[img] ;?>">
                                            </div>
                                            <br>
                                    <div align="center">
                                        <h3><?php echo $row[title] ;?></h3>
                                        <br>
                                        <p><?php echo $row[blog] ;}?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                    <div class="b1">
                                            <div>
                                            <?php
                            
                            $select4 = "select * from admin_blog where id='3' ";
                            $result4 = mysqli_query($con , $select4);
                            while($row = mysqli_fetch_array($result4))
                            {
                            ?>
                                                    <img class="bimg" src="<?php echo $row[img] ;?>">
                                                </div>
                                                <br>
                                    <div align="center">
                                        <h3><?php echo $row[title] ;?></h3>
                                        <br>
                                        <p><?php echo $row[blog] ;}?></p>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="more"><button class="more">more</button></div>
                                </td>
                        </tr>
                    </table>
                </div>
        </div>
        <div id="gallery">
                <br>
                <div class="header">
                        <span class="sp5">G</span><span class="sp6">allery</span> 
                </div>
                <div align="center"><br>
                    <table>
                        <tr>
                            <td>
                                <div class="gimg">
                                <?php
                            
                            $select4 = "select * from gallery where id='1' ";
                            $result4 = mysqli_query($con , $select4);
                            while($row = mysqli_fetch_array($result4))
                            {
                            ?>
                            <img src="<?php echo $row[image]; ?>" width="300px" height="300px;">
                            <?php } ?>
                                </div>
                            </td>
                            <td>
                                <div class="gimg">
                                <?php
                            
                            $select5 = "select * from gallery where id='2' ";
                            $result5 = mysqli_query($con , $select5);
                            while($row = mysqli_fetch_array($result5))
                            {
                            ?>
                            <img src="<?php echo $row[image]; ?>" width="300px" height="300px;">
                            <?php } ?>
                                </div>
                            </td>
                            <td>
                                <div class="gimg">
                                <?php
                            
                            $select6 = "select * from gallery where id='3' ";
                            $result6 = mysqli_query($con , $select6);
                            while($row = mysqli_fetch_array($result6))
                            {
                            ?>
                            <img src="<?php echo $row[image]; ?>" width="300px" height="300px;">
                            <?php } ?>
                                </div>
                            </td>
                            <td>
                                <div class="more"><button class="more">more</button></div>
                            </td>
                        </tr>
                    </table>
                </div>
        </div>
        <div id="product">
            <br>
            <div class="header">
                    <span class="sp5">P</span><span class="sp6">roducts</span> 
            </div>
            <div align="center"><br>
                <table>
                    <tr>
                        <td>
                            <div class="p">
                            <?php
                            
                            $select7 = "select * from product where id='1' ";
                            $result7 = mysqli_query($con , $select7);
                            while($row = mysqli_fetch_array($result7))
                            {
                            ?>
                                <img class="pimg" src="<?php echo $row[image]; ?>">
                                <h3 class="mt-4 text-center"><?php echo $row[name]; ?></h3>
                                <?php } ?>
                            </div>
                        </td>
                        <td>
                            <div class="p">
                            <?php
                            
                            $select8 = "select * from product where id='2' ";
                            $result8 = mysqli_query($con , $select8);
                            while($row = mysqli_fetch_array($result8))
                            {
                            ?>
                                <img class="pimg" src="<?php echo $row[image]; ?>">
                                <h3 class="mt-4 text-center"><?php echo $row[name]; ?></h3>
                                <?php } ?>
                            </div>
                        </td>
                        <td>
                            <div class="p">
                            <?php
                            
                            $select9 = "select * from product where id='3' ";
                            $result9 = mysqli_query($con , $select9);
                            while($row = mysqli_fetch_array($result9))
                            {
                            ?>
                                <img class="pimg" src="<?php echo $row[image]; ?>">
                                <h3 class="mt-4 text-center"><?php echo $row[name]; ?></h3>
                                <?php } ?>
                            </div>
                        </td>
                        <td>
                            <div class="more"><button class="more">more</button></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="contact">
            <br>
            <div class="header">
                    <span class="sp5">C</span><span class="sp6">ontact</span>  <span class="sp5">U</span><span class="sp6">s</span>
            </div>
            <div>
                <div align="center" class="contact-form">
                    <table align="center">
                        <form>
                            <tr>
                               <h3> Contact</h3>
                            </tr>
                        
                            <tr>
                                <input class="input-con" type="text" placeholder="Name">
                            </tr>
                            <br>
                            <br>
                            <tr>
                                <input class="input-con" type="email" placeholder="email">
                            </tr><br>
                            <br>
                            <tr>
                                <input class="input-con" type="mobile" placeholder="contact" >
                            </tr>
                            <br>
                            <br>
                            <tr>
                                <textarea class="input-text" placeholder="Message us!" ></textarea>
                            </tr>
                            <br> <br>   
                            <tr>
                                <button class="btn btn-primary">Submit</button>
                            </tr>
                        </form>
                    </table>
                </div>
                <div align="center" class="contact-form2">
                    <table align="center">
                        <tr>
                            <h3>location:</h3>
                        </tr>
                        <tr>
                            <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7122.628795899343!2d75.8170672!3d26.79811609999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1554472324086!5m2!1sen!2sin" width="500" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </tr>
                        <br>
                        <tr>
                            <b>address :</b>
                        </tr>
                        <tr>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, explicabo natus, esse culpa doloremque amet omnis ab temporibus officiis error reiciendis at cumque, mollitia ullam impedit neque expedita ad distinctio.
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>