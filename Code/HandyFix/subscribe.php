
<?php
include_once "db_connect.php";
if (isset($_POST['submit'])) {
		
		// Subscribe Form
		
		$email= $_POST['email'];
		
		$query1 = "INSERT INTO  newsletter(email)
		
		VALUES ('$email')";
		
       if ($conn->query($query1) === TRUE ) {
		   
		    header('location:index.php');
				
		} else {
			echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
		}
		
		$conn->close();
		
		
				
		
	}
?>