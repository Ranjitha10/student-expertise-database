


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
		
$clubname= $_POST ['clubname'];
$role= $_POST ['role'];
$joindate= $_POST ['joindate'];
$category= $_POST ['category'];
$USN= $_POST ['USN'];

$sql = "INSERT INTO club(ClubName,Role,DateOfJoin,Category,USN)
				 VALUES ('$clubname','$role','$joindate','$category','$USN')";

if ($conn->query($sql) === TRUE) {
    echo "Thank youuuuuuuuuuu......................New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
