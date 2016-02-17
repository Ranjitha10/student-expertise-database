


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
$cname= $_POST ['cname'];
$cid= $_POST ['cid'];
$credits= $_POST ['credits'];

$sql = "INSERT INTO course (cname,cid,credits)
VALUES ('$cname','$cid','$credits')";

if ($conn->query($sql) === TRUE) {
    header('location: sub.html');
} else {
   header('location: err.html');
}

$conn->close();
?>
