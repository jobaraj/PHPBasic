

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
	
	
	
	if(isset($_POST['update'])){
	
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
		
		$sql = "UPDATE `student_info` SET `name`='".$student_name."',`roll_no`='".$student_roll."',`department`='".$student_department."',`fathers_name`='".$father_name."',`mothers_name`='".$mother_name."' WHERE roll_no='".$student_roll."'";
		$query = $conn->query($sql);
		
		$sql2 = "UPDATE `results` SET `roll_no`='".$student_roll."',`gpa`='".$result."' WHERE roll_no='".$student_roll."'";
		$query2 = $conn->query($sql2);
		
		$sql3 = "UPDATE `address` SET `roll_num`='".$student_roll."',`village`='".$vill."',`post_office`='".$post."',`thana`='".$than."',`district`='".$dist."',`division`='".$div."' 
		WHERE roll_num='".$student_roll."'";
		$query3 = $conn->query($sql3);
		
		if($query){
			$msg = "Data Updated Succesfully";
		}else {
			$msg = "Data Not Updated";
		}
	
	}
	
	if(isset($_GET['id'])){
	
		$roll_no = $_GET['id'];
		
		$sql = "select s.*, r.*, a.* from student_info s, results r, address a where s.roll_no=r.roll_no and s.roll_no=a.roll_num and s.roll_no='".$roll_no."' ";
	
		$query = $conn->query($sql);
		
		$row = $query->fetch_object();
	
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
			<input type="text" name="name" value="<?php echo $row->name;?>">
			<label for="">Roll No:</label>
			<input type="text" name="roll_no" value="<?php echo $row->roll_no;?>">
			<label for="">Department:</label>
			<input type="text" name="department" value="<?php echo $row->department;?>">
			<label for="">Father's Name:</label>
			<input type="text" name="fathers_name" value="<?php echo $row->fathers_name;?>">
			<label for="">Mother's Name:</label>
			<input type="text" name="mothers_name" value="<?php echo $row->mothers_name;?>">
			<label for="">Results:</label>
			<input type="text" name="gpa" value="<?php echo $row->gpa;?>">
			<label for="">Village:</label>
			<input type="text" name="village" value="<?php echo $row->village;?>">
			<label for="">P.O:</label>
			<input type="text" name="post_office" value="<?php echo $row->post_office;?>">
			<label for="">Thana:</label>
			<input type="text" name="thana" value="<?php echo $row->thana;?>">
			<label for="">District:</label>
			<input type="text" name="district" value="<?php echo $row->district;?>">
			<label for="">Division:</label>
			<input type="text" name="division" value="<?php echo $row->division;?>">
			
			<?php if(isset($_GET['id'])){?>
			<input type="submit" name="update" value="Update">
			<?php }else{ ?>
			<input type="submit" name="submit" value="Submit">
			<?php } ?>
			
		
		</form>
		</div>
	
	</body>


</html>