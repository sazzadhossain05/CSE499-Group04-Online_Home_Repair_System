
<html>
<head>
	<title>View Job Application |  Admin Panel | HandyFix Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">Home</a></li>
				<li><a class="homeblack" href="addemp.php">Add Emp.</a></li>
				<li><a class="homeblack" href="viewemp.php">View Emp.</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Emp. Leave</a></li>
				
				<li><a class="homered" href="applicationofserviceman.php">Job App.</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

			<h1 align = "center">Application For Employment As Serviceman</h1>

<?php
include("process/db_connect.php");
error_reporting(0);
$query= "SELECT * FROM serviceprovider";
$data= mysqli_query($conn,$query);
$total=mysqli_num_fields($data);


if($total !=0)
{
   ?>
   
    <table class="table-style">
	
	 <tr>

				<th align = "center">Employee ID</th>
				
				<th align = "center">First Name</th>
				<th align = "center">Last Name</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">Contact</th>
				<th align = "center">NID</th>
				<th align = "center">Address</th>
				<th align = "center">Department</th>
				<th align = "center">Degree</th>
				<th align = "center">Delete</th>
			</tr>
	
   
   <?php
  while($result = mysqli_fetch_assoc($data))
  {
	  echo"
	  <tr>
	<td>".$result['id']."</td>
	<td>".$result['firstName']."</td>
	<td>".$result['lastName']."</td>
	<td>".$result['email']."</td>
	<td>".$result['birthday']."</td>
	<td>".$result['gender']."</td>
	<td>".$result['contact']."</td>
	<td>".$result['nid']."</td>
	<td>".$result['address']."</td>
	<td>".$result['dept']."</td>
	<td>".$result['degree']."</td>
	

	<td><a href='applicationofservicemandelete.php?a=$result[id]' onclick='return checkdelete()'>Delete</a></td>
	   </tr>";
	 
  }
    	 	
}
else
{
  echo "No Records Found";
}
 
?>
</table>
<script>
function checkdelete()
{
return confirm('Are you sure you want to delete this data?');	
	
}
</script>

		
		
	
</body>
</html>