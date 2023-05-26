

<?php
include_once "dbconnect.php";
$msg = "";
	if(isset($_POST['submit'])){
		
		$student_name = $_POST['name'];
		$student_roll = $_POST['roll_no'];
		$student_department = $_POST['department'];
		$father_name = $_POST['fathers_name'];
		$mother_name = $_POST['mothers_name'];
		$result = $_POST['gpa'];
		$vill = $_POST['village'];
		$post = $_POST['post_office'];
		$than = $_POST['thana'];
		$dist = $_POST['district'];
		$div = $_POST['division'];
		
		$sql= "INSERT INTO `student_info`( `name`, `roll_no`, `department`, `fathers_name`, `mothers_name`) 
				VALUES ('".$student_name."','".$student_roll."','".$student_department."','".$father_name."','".$mother_name."')";
		$query = $conn->query($sql);
			
		$sql2 ="INSERT INTO `results`( `roll_no`, `gpa`) VALUES ('".$student_roll."','".$result."')";
		$query2 = $conn->query($sql2);
		
		$sql3 = "INSERT INTO `address`( `roll_num`, `village`, `post_office`, `thana`, `district`, `division`) 
				VALUES ('".$student_roll."','".$vill."','".$post."','".$than."','".$dist."','".$div."')";
		$query3 = $conn->query($sql3);		
		
		
		if($query){
			$msg = "Data Inserted Succesfully";
		}else {
			$msg = "Data Not Inserted";
		}
	
	}

?>

<html>

	<head>
		<title>data input</title>
	</head>
	
	<style>
    div {
        width: 500px;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 20px;
    }
    input{
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
    }
    input[type="submit"]{
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
</style>
	
	<body>
		
		<div>
		<h2 style="text-align:center">Please Insert Your Information</h2>
		<form action="" method="post">
			
			<label for="">Student Name:</label>
			<input type="text" name="name" value="">
			<label for="">Roll No:</label>
			<input type="text" name="roll_no" value="">
			<label for="">Department:</label>
			<input type="text" name="department" value="">
			<label for="">Father's Name:</label>
			<input type="text" name="fathers_name" value="">
			<label for="">Mother's Name:</label>
			<input type="text" name="mothers_name" value="">
			<label for="">Results:</label>
			<input type="text" name="gpa" value="">
			<label for="">Village:</label>
			<input type="text" name="village" value="">
			<label for="">P.O:</label>
			<input type="text" name="post_office" value="">
			<label for="">Thana:</label>
			<input type="text" name="thana" value="">
			<label for="">District:</label>
			<input type="text" name="district" value="">
			<label for="">Division:</label>
			<input type="text" name="division" value="">
			
			<input type="submit" name="submit" value="Submit">
		
		</form>
		</div>
	
	</body>


</html>