xample (MySQLi Object-oriented)
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abhi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO login (userid, username, passward)
VALUES ('1', 'Doe', '12345')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>