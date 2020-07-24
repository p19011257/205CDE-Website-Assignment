<?php
	session_start();
	
	$username="";
	$email="";
	$errors=array();
	
	$db=mysqli_connect('localhost','root','','form');
	if(isset($_POST['register'])){
		$username=$db-> real_escape_string($_POST['username']);
		$email=$db->real_escape_string($_POST['email']);
		$password_1=$db->real_escape_string($_POST['password_1']);
	
	
	if(empty($username)){
		array_push($errors,"Username is required");
		
	}
	if(empty($email)){
		array_push($errors,"Email is required");
		
	}
	if(empty($password_1)){
		array_push($errors,"Password is required");
		
		
	}
	
	if(count($errors)==0){
		$password=md5($password_1);
		$sql="INSERT INTO users(username,email,password)
				VALUES('$username','$email','$password')";
		mysqli_query($db,$sql);
		$_SESSION['username']=$username;
		$_SESSION['success']="You are now logged in";
		header('location:index.php');
	}
}
	
if(isset($_POST['login'])){
	$username=$db-> real_escape_string($_POST['username']);
	$password=$db->real_escape_string($_POST['password']);
	
	
	if(empty($username)){
		array_push($errors,"Username is required");
		
	}
	if(empty($password)){
		array_push($errors,"Password is required");
		
	}
	if(count($errors)==0){
		$password=md5($password);
		$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now logged in";
			header('location:index.php');
		}else{
			array_push($errors,"The username or password combination");
			
		}
	}
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}


?>