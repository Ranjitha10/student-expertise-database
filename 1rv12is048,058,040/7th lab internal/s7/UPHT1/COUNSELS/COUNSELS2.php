


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
$Fid= $_POST ['Fid'];
$batch= $_POST ['batch'];
$sql = "INSERT INTO counsels(USN,Fid,batch)
VALUES ('$USN','$Fid','$batch')";

if ($conn->query($sql) === TRUE) {
    echo "									THANK YOU!!!!
							YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.
	
	";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
