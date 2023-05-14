<?php
// Set database credentials
$host = 'localhost';
$username = 'mxrxz';
$password = 'meriem0101.';
$dbname = '7kaya
';

// Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert a new user
$username = 'JohnDoe';
$email = 'johndoe@example.com';
$password = 'mypassword';

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "New user inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Retrieve user records
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . ", Username: " . $row['username'] . ", Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No users found";
}

// Close database connection
mysqli_close($conn);
?>
