


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
$challanno= $_POST ['challanno'];
$amount= $_POST ['amount'];
$fdate= $_POST ['fdate'];
$ayear= $_POST ['ayear'];
$USN= $_POST ['USN'];


$sql = "INSERT INTO feedetails (ChallanNumber,Amount,Feedate,AcademicYear,USN)
						VALUES ('$challanno','$amount','$fdate','$ayear','$USN')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
