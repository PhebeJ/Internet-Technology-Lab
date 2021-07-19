<?php
	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$branch = $_POST['branch'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$db = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($db, $username, $password,"student");
  if($conn){
		$query_text = "insert into info values('$rollno','$name','$gender','$branch','$email','$address')";
		$query = mysqli_query($conn,$query_text);
			if($query){
				echo "query successful !";
			}
			else
				echo "query error";
	}
  else {
      echo "connection error";
  }
	mysqli_close($conn);
?>
