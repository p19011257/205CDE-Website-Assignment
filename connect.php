<?php
	$firstName=$_POST['firstname'];
	$lastName=$_POST['lastname'];
	$emailAddress=$_POST['emailaddress'];
	$phoneNumber=$_POST['phonenumber'];
	$problem=$_POST['problem'];
	
	$conn= new mysqli('localhost','root','','form');
	if($conn->connect_error){
		die('Connection Failed:'.$conn->connect_error);
	}else{
		$stmt=$conn->prepare("insert into support(firstName,lastName,emailAddress,phoneNumber,problem)
			values(?,?,?,?,?)");
		$stmt->bind_param("sssis",$firstName,$lastName,$emailAddress,$phoneNumber,$problem);
		$stmt->execute();
		echo"Form Inserted Successfully!!!";
		$stmt->close();
		$conn->close();
	}

?>