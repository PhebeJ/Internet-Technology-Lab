<?php
	$db = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($db, $username, $password,"student");
  if($conn){
		$query_text = "select * from info;";
		$result = mysqli_query($conn,$query_text);
			if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          echo "Name: ".$row['name']."<br>Roll no: ".$row['rollno']."<br>Gender: ".$row['gender']."<br>Branch: ".$row['branch']."<br>Email: ".$row['email']."<br>Address: ".$row['address'];
          echo "<br><br>";
        }
			}
			else
				echo "query error";
	}
  else {
      echo "connection error";
  }
	mysqli_close($conn);
?>
