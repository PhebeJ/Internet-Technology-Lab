<?php
	$rollno = $_POST['rollno'];
	$db = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($db, $username, $password,"student");
  if($conn){
		$query_text = "delete from info where rollno='$rollno';";
		$query = mysqli_query($conn,$query_text);
			if($query){
				echo "Query successful";
			}
			else
				echo "query error";
	}
  else {
      echo "connection error";
  }
	mysqli_close($conn);
?>
