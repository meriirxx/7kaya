<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  
  // Validate input fields
  if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "Please fill in all required fields.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
  } elseif ($password != $confirm_password) {
    echo "Passwords do not match.";
  } else {
    // Store user data in a database or file
    // Redirect to a success page
    header("Location: success.html");
    exit();
  }
}
?>
