
<?php

   session_start();
   require 'config/db.php';
   $errors = array();
   $username="";
   $email= "";
  //if user clicks on the sign up button
  if(isset($_POST['signup-btn'])){
	 
	$username = $_POST['username']; 
	$email = $_POST['email']; 
	$password = $_POST['password']; 
	$passwordConf = $_POST['passwordConf']; 
	
	//validation
	if (empty($username)){
		$errors['username'] = "Username required";
		
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors['email']= "Email address is invalid";	
	}
	if (empty($email)){
		$errors['email'] = "Email required";
		
	}
	if (empty($password)){
		$errors['password'] = "Password required";
		
	}
	 if ($password !== $passwordConf){
		$errors['password'] = "Passwords do not match.";
		
	}
	$emailQuery = "SELECT * FROM registration WHERE email=? LIMIT 1";
	$stmt= $conn->prepare($emailQuery);
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$result = $stmt->get_result();
	$userCount = $result->num_rows;
	$stmt->close();
	if($userCount > 0){
		
		$errors['email'] = "Email already exists";
		
	}
	
	if(count($errors) === 0){
		
		$password = password_hash($password,PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));
		$verified = false;
		
		
	$sql= "INSERT INTO registration (username, email, verified,token,password)VALUES(?,?,?,?,?)";
	$stmt= $conn->prepare($sql);
	$stmt->bind_param('ssbss',$username,$email,$verified,$token,$password);
	if($stmt->execute()){
		//login user
		$user_id=$conn->insert_id;
		$SESSION['id']= $user_id;
		$SESSION['username']= $username;
		$SESSION['email']= $email;
		$SESSION['verified']= $verified;
		//set flash message
		$SESSION['message']= "You are now logged in!";
		$SESSION['alert-class']= "alert-success";
		header('location:index.php');
		exit();
		
	}else{
	    	
		$errors['db_error']="Database error: failed to register";
		
	}
	}
	
	
 }