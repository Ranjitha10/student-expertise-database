


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
$usernamesignup= $_POST ['usernamesignup'];
$emailsignup= $_POST ['emailsignup'];
$passwordsignup= $_POST ['passwordsignup'];
$passwordsignup_confirm= $_POST ['passwordsignup_confirm'];
//if($passwordsignup==$passwordsignup_confirm)
//{
$sql = "INSERT INTO signup(username,email,password,cpassword)
VALUES ('$usernamesignup','$emailsignup','$passwordsignup','$passwordsignup_confirm')";

if ($conn->query($sql) === TRUE) {
    echo "									THANK YOU!!!!
							YOUR ACCOUNT HAS BEEN CREATED SUCCESSFULLY.
	
	";
}
//} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
