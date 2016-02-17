
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
						
						$USN= $_POST ['USN'];
						$sem= $_POST ['sem'];
						$sem2=($sem)-1;
						$strSQL = "SELECT * FROM student";

	// Execute the query (the recordset $rs contains the result)
	
$retval = mysql_query( $strSQL, $conn );
						
						if ($conn->query($rs) === TRUE){						
						
echo "Generating counsellor registration for $USN";
						while($row = mysql_fetch_array($rs)) {

	   // Write the value of the column FirstName (which is now in the array $row)
	  
	echo $row['Fname']. "<br />";; 

	  }
						
						
						
						
						
						
} else {
    echo "Error: " . $rs . "<br>" . $conn->error;
}

$conn->close();

?>
