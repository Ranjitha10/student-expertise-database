<?php
								
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "student_expertize";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									} 
						
						$Grade= $_POST ['Grade'];
						$GradePoints= $_POST ['GradePoints'];
						$USN= $_POST ['USN'];
						$sem = $_POST ['sem'];
						$cid= $_POST ['cid'];
						
						$sql = "INSERT INTO see (Grade, GradePoints, USN,Semester,cid)
						VALUES ('$Grade','$GradePoints','$USN','$sem','$cid')";
						
						if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>