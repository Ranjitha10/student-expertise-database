


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student_expertize";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$gname= $_POST ['gname'];
$relation= $_POST ['relation'];
$email= $_POST ['email'];
$phone= $_POST ['phone'];
$USN= $_POST ['USN'];


$sql = "INSERT INTO guardian(Relationship,GuardianName,GuardianEmailId,GuardianPhone,USN)
						VALUES ('$relation','$gname','$email','$phone','$USN')";

if ($conn->query($sql) === TRUE) {
	 echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
