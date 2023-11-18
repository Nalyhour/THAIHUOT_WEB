<?php
// Establish database connection
$dbHost = 'localhost'; // Assuming the host is localhost
$dbUser = 'root'; // Assuming the username is root
$dbPass = ''; // Assuming there is no password set
$dbName = 'thaihuot';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Sanitize and validate the form data (you can add your own validation logic here)

// Construct SQL statement
$sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

// Execute SQL statement
if (mysqli_query($conn, $sql)) {
    // Display success message
   
    
} else {
    // Display error message
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>