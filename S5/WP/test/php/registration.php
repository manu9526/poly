


<?php 
include 'php/registration.php';
$servername="localhost";
$username="root";
$password="qwerty67";
$dbname="test";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die ("connection error".$conn->connect_error);
}

$username = $_POST['username'];
$password =$_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

$stmt = $conn->prepare("INSERT INTO users (username, password, phone, dob, gender) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $username, $password, $phone, $dob, $gender);

if ($stmt->execute()) {
    echo "New record created successfully";
    header("Location: /php/test/login.html");
} else {
    echo "Error: " . $stmt . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>

