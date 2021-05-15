<?php
include("process/db_connect.php");
$applicant_id=$_GET['a'];

$query = "DELETE FROM serviceprovider WHERE id='$applicant_id'";

$data=mysqli_query($conn, $query);
if($data)
{
  echo "<script>alert('Record Deleted, Press OK')</script>";	
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/spring%202020%20-cse%20499%20-practice/HandyFix/Employee_Management_System/applicationofserviceman.php">
  
  <?php
}
else
{
	
echo "<font color='red'>Delete Process Failed"	;
}
?>