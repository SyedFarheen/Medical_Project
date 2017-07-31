
<?php
include_once "conf.php";
$id=$_GET['id'];

$sql="SELECT * FROM `disease` WHERE `id`='".$id."' ";
$result=mysqli_query($conn, $sql);
$details=array();

while($row=mysqli_fetch_assoc($result)) {
	$row=array('title'=>$row['title'], 'description'=>$row['description'],'location'=>$row['location'],'level'=>$row['level'],'message'=>$row['message']);
array_push($details,$row);
}

$json=array('state'=>true, "details"=>$details);
echo json_encode($json);



?>
