
<?php
include_once "dbconnect.php";

	$sql = "select s.*, r.gpa, a.district from student_info s, results r, address a where s.roll_no=r.roll_no and s.roll_no=a.roll_num ";
	
	$query = $conn->query($sql);

?>

<html>

	<head>
	
		<title>Data view</title>
	
	</head>
	
	<style>
    
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        th{
            background-color: #4CAF50;
            color: white;
        }
      
</style>
	
	<body>
	
		<table>
			
			<thead>
				<tr>
					
					<th>SL</th>
					<th>Roll No</th>
					<th>Student Name</th>
					<th>Department</th>
					<th>Result</th>
					<th>Father's Name</th>
					<th>Mother Name</th>
					<th>Address</th>
					<th>Action</th>
				
				</tr>
			</thead>
			
			<tbody>
			
				<?php
					$s=1;
					while($row= $query->fetch_object()){ ?> 
					
					
				<tr>
				
					<td><?php echo $s++;?></td>
					<td><?php echo $row->roll_no;?></td>
					<td><?php echo $row->name;?></td>
					<td><?php echo $row->department;?></td>
					<td><?php echo $row->gpa;?></td>
					<td><?php echo $row->fathers_name;?></td>
					<td><?php echo $row->mothers_name;?></td>
					<td><?php echo $row->district;?></td>
					<td>
						<a href="input.php?id=<?php echo $row->roll_no;?>">Edit</a>
						<a href="delete.php?id=<?php echo $row->roll_no;?>">Delete</a>
						
					</td>
				
				</tr>
				<?php } ?> 
			</tbody>
		
		
		</table>
	
	</body>

</html>