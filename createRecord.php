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

// sql to create table
$sql = "CREATE TABLE registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "dataBas Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</body>
</html>