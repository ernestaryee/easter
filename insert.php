<!DOCTYPE html>
<html>
<head>
<title>

</title>
</head>
<body>
 <p> This is an html line </p>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "dataBas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Fname = ($_REQUEST['Fname']);
$Lname = ($_REQUEST['Lname']);
$email = ($_REQUEST['email']);

// sql to create table
$sql = "INSERT INTO registration (firstname, lastname, email) VALUES ('$Fname', '$Lname', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "dataBas data inserted successfully";
} else {
    echo "Error inserting into database: " . $conn->error;
}

$conn->close();
?>
</body>
</html>