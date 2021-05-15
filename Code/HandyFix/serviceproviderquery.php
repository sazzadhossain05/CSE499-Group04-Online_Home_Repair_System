
<?php

require_once ('db_connect.php');
error_reporting(0);
$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$salary = $_POST['salary'];
$birthday =$_POST['birthday'];
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored)){

    $destinationfile = 'images/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);

    $sql = "INSERT INTO `serviceprovider`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`, `pic`) 
	VALUES ('','$firstname','$lastName','$email','$password','$birthday','$gender','$contact','$nid','$address','$dept','$degree','$destinationfile')";

$result = mysqli_query($conn, $sql);
if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='../HandyFix/index.php';
    </SCRIPT>");
	}
}
else {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('Failed to Registere')
              window.location.href='javascript:history.go(-1)';
               </SCRIPT>");
     }
  
  $conn->close();
		


?>