<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <!--Login Section-->
    <div class="container center-align">
		<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
        <form action="" method="POST">
            <center><h3>ADMIN LOGIN</h3></center>
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
            <button type="submit" name="sub" class="btn btn-lg btn-primary">Submit</button>
           </form>
        </div>
    </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include 'conf.php';
$GLOBALS['ERROR_MSG'] ="";

if(isset($_POST['sub'])){
if(isset($_POST['username']) && isset($_POST['password'])){

    $sql = "SELECT * FROM `login` WHERE 1";

    $query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) != 0) {
		

        while($admin_details = mysqli_fetch_assoc($query) ){
            if($admin_details['username'] == $_POST['username'] && $admin_details['password'] == $_POST['password']) {
				$_SESSION['e'] = $_POST['username'];
				$_SESSION['id'] = $admin_details['id'];

			header('Location:users.php');
		}
			
			
			
		}
	}
}
}
?>


