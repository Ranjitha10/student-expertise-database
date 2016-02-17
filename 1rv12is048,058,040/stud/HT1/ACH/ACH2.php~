


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
$AchievementType= $_POST ['AchievementType'];
$AchievementName= $_POST ['AchievementName'];
$AchievementLevel= $_POST ['AchievementLevel'];
$Rank= $_POST ['Rank'];
$USN= $_POST ['USN'];
$sql = "INSERT INTO achievements (AchievementType,AchievementName,AchievementLevel,Rank,USN)
VALUES ('$AchievementType','$AchievementName','$AchievementLevel','$Rank','$USN')";

if ($conn->query($sql) === TRUE) {
   				header('location: sub.html');
	
} else {
     header('location: err.html');
}

$conn->close();
?>
