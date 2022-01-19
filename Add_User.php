<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pms";

$user_Fname = $_POST['Fname'];
$user_Lname = $_POST['Lname'];
$user_phone = $_POST['phone'];
$user_email = $_POST['Email'];
$user_password = $_POST['Password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_users (Fname,Lname,phone,Email,password)
VALUES ('" . $user_Fname . "','" . $user_Lname . "','" . $user_phone . "','" . $user_email . "','" . $user_password . "')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New user registered</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
