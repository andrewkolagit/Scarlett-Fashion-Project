<?php
$servername = "localhost";
$username = "root";
$password = "wycliffe5";
$database = "scarlett_fashion";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$txtfeedbk = $_POST['feedbk'];
$txtflname = $_POST['flname'];
$txtemailPNumber = $_POST['emailPNumber'];

$sql = "INSERT INTO feedback (Feedback, Name, Email_or_PNumber) VALUES ('$txtfeedbk', '$txtflname', '$txtemailPNumber')";

if ($conn->query($sql) === TRUE) {
  echo "FEEDBACK SENT!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>