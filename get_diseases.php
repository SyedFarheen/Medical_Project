<?php
include_once "conf.php";
$tag1=$_GET['tag1'];
$tag2=$_GET['tag2'];
$tag3=$_GET['tag3'];
$tag4=$_GET['tag4'];
if($tag3 != "" && $tag4 != "") {
 $sql="SELECT * FROM `disease` WHERE (`tags` LIKE '%$tag1%' OR `tags` LIKE '%$tag2%' OR `tags` LIKE '%$tag3%' OR `tags` LIKE '%$tag4%')";
} else if($tag3 != "") {
 $sql="SELECT * FROM `disease` WHERE `tags` LIKE '%$tag1%' OR `tags` LIKE '%$tag2%' OR `tags` LIKE '%$tag3%'";
} else if($tag4 != "") {
 $sql="SELECT * FROM `disease` WHERE `tags` LIKE '%$tag1%' OR `tags` LIKE '%$tag2%' OR `tags` LIKE '%$tag4%'";
 } else {
 $sql="SELECT * FROM `disease` WHERE (`tags` LIKE '%$tag1%' OR `tags` LIKE '%$tag2%')";
}

$result=mysqli_query($conn, $sql);
$details=array();

while($row=mysqli_fetch_assoc($result)) {
$row=array('id'=>$row['id'], 'title'=>$row['title']);
array_push($details,$row);
}

$json=array('state'=>true, "details"=>$details);
echo json_encode($json);
?>
