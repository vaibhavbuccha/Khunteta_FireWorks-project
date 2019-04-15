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
        <link rel="stylesheet" href="css/user.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="header"><span class="s1">K</span><span class="s2">hunteta</span> <span class="s3">F</span><span class="s4">ireworks</span></div>
        <div class="main">
            <div class="dash">User <span><a href="deshboard.php" class="btn log btn-outline-info">Dashboard</a></span>  <span><a href="logout.php" class="btn log btn-outline-danger">logout</a></span></div>
            <div class="container jumbotron" class="jumbotron" align="center">
            <table  class="container jumbotron"  width="800px" cellspacing="1" cellpadding="1">
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
            </table><br>
            <div align="center">
                <form action="#" method="post"> 
                    <button name="delall" class="btn btn-warning" type="submit">delete all</button>
                </form>
                <?php
                
                    if(isset($_POST['delall']))
                    {
                        $truncate = "TRUNCATE TABLE user";
                        if(mysqli_query($con,$truncate))
                        {
                            echo '<h3>All records Are Deleted.</h3>';
                            header("location : user.php");
                        }
                    }
                
                ?>
            </div>
    </div>  
            </div>
        </div>
</body>
</html>