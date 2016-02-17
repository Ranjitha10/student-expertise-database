


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
$level= $_POST ['level'];
$CertificateName= $_POST ['CertificateName'];
$AcademicYear= $_POST ['AcademicYear'];
$USN= $_POST ['USN'];
$sql = "INSERT INTO hss (level,CertificateName,AcademicYear,USN)
VALUES ('$level','$CertificateName','$AcademicYear','$USN')";

if ($conn->query($sql) === TRUE) {
    header('location: sub.html');
	
} else {
    header('location: err.html');
	
}

$conn->close();
?>
