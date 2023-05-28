

<?php
include_once "dbconnect.php";


$roll_no = $_GET['id'];

$sql = "DELETE FROM `student_info` WHERE roll_no='".$roll_no."'";
$query = $conn->query($sql);


$sql2 = "DELETE FROM `results` WHERE roll_no='".$roll_no."'";
$query2 = $conn->query($sql2);

$sql3 = "DELETE FROM `address` WHERE roll_num='".$roll_no."'";
$query3 = $conn->query($sql3);


if($query){
	echo "Deleted succesfully";
	header('Location: view.php');
}else {
	echo "Not Deleted";
}

?>