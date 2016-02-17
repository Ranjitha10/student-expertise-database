


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
$Dno= $_POST ['Dno'];
$Cross_Num= $_POST ['Cross_Num'];
$Main= $_POST ['Main'];
$Street= $_POST ['Street'];
$City= $_POST ['City'];
$District= $_POST ['District'];
$State= $_POST ['State'];
$pin= $_POST ['pin'];

$sql = "INSERT INTO student_address2 (USN,Dno,Cross_Num,Main,Street,City,District,State,pin)
VALUES ('$USN','$Dno','$Cross_Num','$Main','$Street','$City','$District','$State','$pin')";

if ($conn->query($sql) === TRUE) {
    echo "									THANK YOU!!!!
							YOUR SUBMISSION HAS BEEN RECORDED SUCCESSFULLY.
	
	";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
