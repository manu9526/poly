
<?php 
include 'php/login.php';
include 'php/registration.php';
$servername = "localhost";
$username = "root";
$password = "qwerty67";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows==1) {
    echo "login successfully";
} else {
    echo "Login failed ";
}

$conn->close();


?>
