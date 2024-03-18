<?php
// Establish database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $birthdate = $_POST['birthdate'];
  $age = $_POST['age'];
  $email = $_POST['em'];
  $password = $_POST['pass'];
  
  // Insert data into database
  $sql = "INSERT INTO users (firstname, middlename, lastname, gender, birthdate, age, email, password) 
          VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$birthdate', '$age', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close database connection
$conn->close();
?>
