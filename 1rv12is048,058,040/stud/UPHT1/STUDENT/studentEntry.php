


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
$fname= $_POST ['fname'];							
$mname= $_POST ['mname'];
$lname= $_POST ['lname'];
$email= $_POST ['email'];
$phone= $_POST ['phone'];
$rank= $_POST ['rank'];
$yoa= $_POST ['yoa'];
$ad= $_POST ['ad'];
$cc= $_POST ['cc'];
$income= $_POST ['income'];
$usn= $_POST ['usn'];
$branch= $_POST ['branch'];
$dob= $_POST ['dob'];
$bg= $_POST ['bg'];

	

$sql = "INSERT INTO student (Fname ,Mname ,Lname ,EmailID,PhoneNum,CET_COMEDK_Rank ,YearOfAdmission ,USN ,Branch ,Admission_Number,DOB,BloodGroup,Income,
                              CasteCategory)
				VALUES ('$fname','$mname','$lname','$email','$phone','$rank','$yoa','$usn','$branch','$ad','$dob','$bg','$income','$cc')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
