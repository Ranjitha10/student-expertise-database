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
						
						$USN= $_POST ['USN'];
						$cid= $_POST ['cid'];
						
						$sql = "INSERT INTO studies(USN, cid)
						VALUES ('$USN','$cid')";
						
						if ($conn->query($sql) === TRUE){						
    echo " 
																			THANK YOU!!!!
														YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.
	";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>