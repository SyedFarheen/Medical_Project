<?php

/*include_once "conf.php";

$sql = "DELETE FROM `disease` WHERE `title` = '".$_POST['delete_image']."'";

$query = mysqli_query($conn, $sql);*/
include_once "conf.php";
session_set();
if(isset($_POST['delete'])) {
$type=$_POST['delete'];
$sql = "DELETE FROM `disease` WHERE `id`='".$type."'";
$query = mysqli_query($conn, $sql);
if($query) {
	echo "deleted";
}
else {
	echo "not";
}
}
?>

