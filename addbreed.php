<?php
	$breedName=$_POST['breedname'];
	$origin=$_POST['origin'];
	$benefit=$_POST['benefit'];
	$cons=$_POST['cons'];
	
	
	$conn= new mysqli('localhost','root','','form');
	if($conn->connect_error){
		die('Connection Failed:'.$conn->connect_error);
	}else{
		$stmt=$conn->prepare("insert into breed(breed,origin,benefit,cons)
			values(?,?,?,?)");
		$stmt->bind_param("ssss",$breedName,$origin,$benefit,$cons);
		$stmt->execute();
		echo"Breed Added Successfully!!!";
		$stmt->close();
		$conn->close();
	}

?>