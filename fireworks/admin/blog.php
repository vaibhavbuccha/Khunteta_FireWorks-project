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
    </head>
    <body>
        <div class="header"><span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span></div>
        <div class="main">
            <div class="dash">Blogs <span><a href="deshboard.php" class="btn log btn-outline-info">Dashboard</a></span>  <span><a href="logout.php" class="btn log btn-outline-danger">logout</a></span></div>
            <div class="container jumbotron" align="center">
            <?php
                    $sql = "select * from blog";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>
                <tr>
                <div class="blog">
                        <h3><?php echo $row[title]; ?></h3>
                        <img src="<?php echo "../client/".$row[photo];   ?>" width="600px" height="400px">
                        <p><?php echo $row[blog];  ?></p>
                        <h5><b><q><?php echo "By :- ".$row[name];  ?></q></b></h5><br>
                        <form action="#"  method="post" >
                    <td><button type="submit" class="btn btn-outline-danger" name="delete" value="<?php echo @$row[id];?>" >Delete</button></td>
                    </form>
                        
                </div>
                <?php
                    }
                    if(isset($_POST['delete']))
                    {
                        $delete = $_POST['delete'];
                        $del_query = "DELETE FROM `blog` WHERE id='".$delete."'";
                        if(mysqli_query($con,$del_query))
                        {
                            header("location : user.php");
                        }
                    }
                ?>
            </div>
        </div>
</body>
</html>