<?php
	
	$name = $_POST["name"];
	$rollno = $_POST["rollno"];
	$branch = $_POST["branch"];
	$db = "localhost";
	$username = "root";
	$password = "root";
	$conn = mysqli_connect($db, $username, $password,"test");
	$sql = "INSERT INTO registration values('$rollno','$name','$branch');";
	if(!mysqli_query($conn, $sql)){
		echo 'error';
	}
	else{
		echo 'success';
	}
	mysqli_close($conn);
?>
