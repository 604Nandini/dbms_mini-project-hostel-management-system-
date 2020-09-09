
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$regno = $mysqli->real_escape_string($_REQUEST['regno']);
$firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
$middlename = $mysqli->real_escape_string($_REQUEST['middlename']);
$lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
$dob = $mysqli->real_escape_string($_REQUEST['dob']);
$gender = $mysqli->real_escape_string($_REQUEST['gender']);
$contactno = $mysqli->real_escape_string($_REQUEST['contactno']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$password = $mysqli->real_escape_string($_REQUEST['password']);



 
// Attempt insert query execution
$sql = "INSERT INTO userregistration (regno,firstname, middlename, lastname, dob,  gender, contactno, email, password) VALUES ('$regno', '$firstname','$middlename', '$lastname','$dob','$gender', '$contactno', '$email','$password')";


 

$sql = "CALL findage('$regno','$firstname', '$middlename', '$lastname', '$dob',  '$gender', '$contactno', '$email', '$password')";
	




	
/*if($mysqli->query($sql) === true){
  
echo "Registration successful";

} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

 */
if($mysqli->query($sql) === true  ){
	//echo "<script>alert('Registration successful');</script>";
 header("Location:index.php");

}
// Close connection
$mysqli->close();



?>