<?php

// Start the session
session_start();

// Check if the user is already logged in, redirect to home page if true
if (isset($_SESSION['username'])) {
  header("location: home.php");
  exit;
}

// Check if the login form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {

  // Define the credentials
  $username = "your_username";
  $password = "your_password";

  // Check if the entered username and password match with the credentials
  if ($_POST['username'] === $username && $_POST['password'] === $password) {

    // Set the session variable and redirect to home page
    $_SESSION['username'] = $username;
    header("location: home.php");
    exit;

  } else {
    // Display error message if the entered credentials are incorrect
    $error_message = "Invalid username or password.";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
      <?php } ?>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.html">Sign up</a></p>
  </div>
</body>
</html>

