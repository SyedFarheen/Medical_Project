<?php
include_once "conf.php";
if(isset($_GET['user_name'])) {
	$user_name = $_GET['user_name'];
	$user_password = $_GET['user_password'];
	$user_age = $_GET['user_age'];
	$user_height = $_GET['user_height'];
	$user_weight = $_GET['user_weight'];
	
	$sql = "INSERT INTO `users`(`name`, `password`, `age`, `height`, `weight`)VALUES('".$user_name."','".$user_password."', '".$user_age."','".$user_height."','".$user_weight."')";
	$query = mysqli_query($conn, $sql);
	if($query) {
		$json=array('state'=>true);
    echo json_encode($json);

	}
	else {
		$json=array('state'=>false);
    echo json_encode($json);

		
	}
	
}
?>
	
