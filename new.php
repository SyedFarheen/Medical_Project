<?php
include_once "conf.php";
session_set();
if(isset($_POST['sub'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$location = $_POST['location'];
	$tags = $_POST['tags'];
	$optradio = $_POST['optradio'];
	$message = $_POST['message'];
	$sql = "INSERT INTO `disease`(`title`, `description`,`location`, `tags`, `level`,`message`)VALUES('".$title."', '".$description."','".$location."', '".$tags."','".$optradio."','".$message."')";
	$query = mysqli_query($conn , $sql);
	if($query)
	{
		header('Location:users.php');
	}
	else {
		echo "not".mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Entry</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/new.css">
</head>
<body>
<!--Header Section Start-->
<nav class="navbar navbar-default">

    <div class="container-fluid">
        <div class="navbar-header">
            <a href="users.php"><h2>Medical Project</h2></a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="dropdown">
                        <button class="btn btn-lg btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="changepwd.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--Header section End-->
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-2">
        <!--Search Box Section-->
        <div class="right-align">
            <strong>Disease List</strong>
            <div class="form-group">
                <input type="text" placeholder="Disease Search">
                <button class="btn btn-default btn-pad" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <!--Search Box Section End-->
        <!--Form Start-->
        <form action="" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Your Title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" rows="4" id="description" name="description" placeholder="Enter Your Description"></textarea>
            </div>
             <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Your Location" required>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter Your Tags" required>
            </div>
            <div class="form-group">
                <label>Level</label>
                <div class="radio">
                    <label><input type="radio"  value="Critical" name="optradio"><span class="btn btn-xs btn-danger">Critical</span></label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Concern" name="optradio"><span class="btn btn-xs btn-warning">Concern</span></label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Attention" name="optradio"><span  class="btn btn-xs btn-success">Attention</span></label>
                </div>
                <div class="radio">
                     <label><input type="radio" value="Normal"  name="optradio" ><span  class="btn btn-xs btn-primary">Normal</span></label>
                </div>
            </div>
            <div class="form-group">
                <label for="critical">Critical Message</label>
                <textarea class="form-control" rows="4" id="critical" name="message" placeholder="Critical Message"></textarea>
            </div>
            <button type="submit" name="sub" class="btn btn-primary">Add</button>
            <a href="" class="btn btn-primary">Reset</a>
        </form>
        <!--Form End-->

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
