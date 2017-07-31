<?php
include_once "conf.php";
session_set();
if(isset($_GET['update'])) {
 $id = $_GET['update'];
 $sql_values = "Select * FROM `disease` WHERE id='".$id."'";
 $query_values = mysqli_query($conn, $sql_values);

 while($roww = mysqli_fetch_assoc($query_values)) {
	 $title = $roww['title'];
	 $description = $roww['description'];
	 $location = $roww['location'];
	 $level = $roww['level'];
	 $tags = $roww['tags'];
	 $message = $roww['message'];


 }
}
if(isset($_POST['sub'])) {
 $newtitle = $_POST['newtitle'];
 $newdescription = $_POST['newdescription'];
 $newlocation = $_POST['newlocation'];
 $newtags = $_POST['newtags'];
 $newoptradio = $_POST['newoptradio'];

$sql = "UPDATE `disease` SET `title`='".$newtitle."' ,`description`='".$newdescription."',`location`='".$newlocation."', `tags`='".$newtags."', `level`='".$newoptradio."' WHERE `id` = '".$id."' ";
$query = mysqli_query($conn ,$sql);
$queryy = "SELECT * FROM `disease`";
$row = mysqli_fetch_array($queryy);
if($query) {
 header('Location:users.php');
}
else {
 echo "not";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit-Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/update.css">
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
    <div class="col-md-8 col-md-offset-2 bg-color">
<!--Search Box Section-->
    <div class="right-align">
        <strong>Disease List</strong>
        <div class="form-group">
            <a href="new.php" type="button" class="btn btn-default btn-center">New Entry</a>
            <input type="text" placeholder="Disease Search">
            <button class="btn btn-default btn-pad" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
<!--Search Box Section End-->
<!--Form Start-->
  <div class="col-md-10 col-md-offset-1">
    <form action="" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="newtitle" value="<?php echo $title; ?>"  placeholder="Enter Your Title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" rows="4" id="description"name="newdescription" placeholder="Enter Your Description"><?php echo $description; ?></textarea>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="newlocation" value="<?php echo $location; ?>"  placeholder="Enter Your Location" required>
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" id="tags" name="newtags" value="<?php echo $tags; ?>" placeholder="Enter Your Tags" required>
        </div>
        <div class="form-group">
		<?php

		if(isset($_GET['update'])) {
			Switch($level) {
				case "Critical" :
					echo "<label>Level</label>
						<div class='radio'>
							<label><input type='radio' value='Critical' name='newoptradio' checked><span  class='btn btn-danger btn-xs'>Critical</span></label>
						</div>
						<div class='radio'>
							<label><input type='radio' value='Concern' name='newoptradio' ><span class='btn btn-warning btn-xs'>Concern</span></label>
						</div>
						<div class='radio'>
							<label><input type='radio' value='Attention' name='newoptradio' ><span  class='btn btn-success btn-xs'>Attention</span></label>
						</div>
						<div class='radio'>
							<label><input type='radio' value='Normal' name='newoptradio' ><span  class='btn btn-primary btn-xs'>Normal</span></label>
						</div>";
					break;

				case "Concern" :
					echo "<label>Level</label>
					<div class='radio'>
						<label><input type='radio' value='Critical' name='newoptradio' ><span  class='btn btn-danger btn-xs'>Critical</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Concern' name='newoptradio' checked><span  class='btn btn-warning btn-xs'>Concern</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Attention' name='newoptradio' ><span  class='btn btn-success btn-xs'>Attention</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Normal' name='newoptradio' ><span  class='btn btn-primary btn-xs'>Normal</span></label>
					</div>";
				break;

				case "Attention" :
					echo "<label>Level</label>
					<div class='radio'>
						<label><input type='radio' value='Critical' name='newoptradio' ><span  class='btn btn-danger btn-xs'>Critical</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Concern' name='newoptradio' ><span  class='btn btn-warning btn-xs'>Concern</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Attention' name='newoptradio' checked ><span  class='btn btn-success btn-xs'>Attention</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Normal' name='newoptradio' ><span  class='btn btn-primary btn-xs'>Normal</span></label>
					</div>";
				break;

				case "Normal" :
					echo "<label>Level</label>
					<div class='radio'>
						<label><input type='radio' value='Critical' name='newoptradio' ><span  class='btn btn-danger btn-xs'>Critical</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Concern' name='newoptradio' ><span  class='btn btn-warning btn-xs'>Concern</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Attention' name='newoptradio' ><span  class='btn btn-success btn-xs'>Attention</span></label>
					</div>
					<div class='radio'>
						<label><input type='radio' value='Normal' name='newoptradio' checked ><span  class='btn btn-primary btn-xs'>Normal</span></label>
					</div>";
				break;



			}

		} /*else {
			echo "<label>Level</label>
      <div class='radio'>
          <label><input type='radio' value='abcd' name='newoptradio' ><span  class='btn btn-danger btn-xs'>abcd</span></label>
      </div>
            <div class='radio'>
                <label><input type='radio' value='Critical' name='newoptradio' ><span  class='btn btn-danger btn-xs'>Critical</span></label>
            </div>
            <div class='radio'>
                <label><input type='radio' value='Concern' name='newoptradio' ><span  class='btn btn-warning btn-xs'>Concern</span></label>
            </div>
            <div class='radio'>
                <label><input type='radio' value='Attention' name='newoptradio' ><span  class='btn btn-success btn-xs'>Attention</span></label>
            </div>
            <div class='radio'>
                <label><input type='radio' value='Normal' name='newoptradio' ><span  class='btn btn-primary btn-xs'>Normal</span></label>
            </div>";
		}*/

		?>

        </div>
        <div class="form-group">
            <label for="critical">Critical Message</label>
            <textarea class="form-control" rows="4" id="critical" placeholder="Critical Message"><?php echo $message; ?></textarea>
        </div>
        <button type="submit" name="sub" class="btn btn-primary">Update</button>
        <a href="" class="btn btn-primary">Reset</a>
    </form>
  </div>
        <!--Form End-->
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
