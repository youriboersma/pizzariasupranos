<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzeriasopranos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['login_submit'])) {
    // Escape user inputs for security
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to check if the provided username and password match with the database
    $sqlLogin = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sqlLogin);

    $row = $result->fetch_assoc();
    $userDetails = array(
        'username' => $row['username'],
        'password' => $row['password'], // Adjust this according to your table structure
        // Add other fields as needed
    );
    
    // Check for errors during query execution
    if (!$result) {
        die("Error executing the query: " . $conn->error);
    }

    // Check if login input matches 
    if ($result->num_rows == 1) {
        // Redirect to home.php if login is successful
        header("Location: index.html");
        exit();
    } else {
        // Set error message and redirect back to index.php
        $_SESSION['falseLogin'] = "Username or password is incorrect";
        header("Location: index.html");
        exit();
    }
  }

  if (isset($_POST['signup_submit'])) {
    $signupEmail = $conn->real_escape_string($_POST['createemail']);
    $signupPassword = $conn->real_escape_string($_POST['createpassword']);

    if (strlen($signupEmail) < 4 || strlen($signupPassword) < 4) {
        // Redirect back to signup.php with an error message
        $_SESSION['invalidAccount'] = "Username must be at least 4 characters long and password must be at least 4 characters long.";
        header("Location: createaccount.php");
        exit;
    }

    $sqlLogin = "SELECT * FROM users WHERE email='$signupEmail'";
    $result = $conn->query($sqlLogin);

    if ($result->num_rows > 0) {
        // Username already exists
        $_SESSION['recordExists'] = "The username already exists";
        header("Location: createaccount.php");
        exit;
    } else {
        // Prepare and bind the insert statement
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $signupEmail, $signupPassword);

        // Execute the insert statement
        if ($stmt->execute()) {
            // Redirect to a success page or do something else
            $_SESSION['recordCreated'] = "Your account has been created. You can now login!";
            header("Location: createaccount.php");
            exit;
        } else {
            // Redirect back to signup.php with an error message
            $_SESSION['error'] = "Error: " . $conn->error;
            header("Location: createaccount.php");
            exit;
        }
    }
  }
}
?>