<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
<div class="container center-align">
    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12" >
        <form method="POST" action="">
            <center><h3>Change Password</h3></center>
            <div class="form-group">
                <label for="pwd">New Password:</label>
                <input type="password" class="form-control" name="newpassword" id="pwd" required>
            </div>
            <div class="form-group">
                <label for="pwd1">Repeat Password:</label>
                <input type="password" class="form-control" name="repeatnewpassword" id="pwd1" required>
            </div>
            <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
<?php
include_once "conf.php";
session_set();
$user = $_SESSION['e'];
$id = $_SESSION['id'];
if ($user) {
	if(isset($_POST['submit'])) { 

		$newpassword = $_POST['newpassword'];
		$repeatnewpassword =$_POST['repeatnewpassword'];

			if ($newpassword==$repeatnewpassword)  {

				//$sql = "UPTADE `login` SET `password`='".$newpassword."' WHERE `login`.`id`='".$id."' ";
				$sql = "UPDATE `login` SET `password` = '$newpassword' WHERE `login`.`id` = $id";
				$query = mysqli_query($conn, $sql);
			
					if($query) {
						session_destroy();
					header('Location:signin.php');
				}
				
			}
			else { 
				echo "Password doesnot match";
			}
		}
	}
				
					
?>
