<html>
<head>
	<title>Table of Support Form</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="form.css">
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Phone Number</th>
		<th>Problem</th>
	</tr>
	<?php
	$conn=mysqli_connect("localhost","root","","form");
	if($conn-> connect_error){
		die("Connection Failed:".$conn->connect_error);
		
	}
	$sql= "SELECT firstName,lastName,phoneNumber,problem FROM support";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){echo"<tr><td>". $row["firstName"]."</td><td>". $row["lastName"]. "</td><td>". $row["phoneNumber"]."</td><td>".$row["problem"]."</td></tr>";
		}
	echo "</table>";
	}
	else{
		echo "0 result";
	}
	$conn-> close();
	
	?>
</table>
</body>
</html>