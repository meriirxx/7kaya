<?php

// Define database connection constants
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'mxrxz');
define('DB_PASSWORD', 'meriem0101.');
define('DB_NAME', '7kaya');

// Connect to the database
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get form data
  $story_title = $_POST['story-title'];
  $story_text = $_POST['story-text'];

  // Insert data into database
  $sql = "INSERT INTO stories (title, text) VALUES ('$story_title', '$story_text')";

  if (mysqli_query($conn, $sql)) {
    echo "<p>Story added successfully!</p>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}

// Close database connection
mysqli_close($conn);

?>
