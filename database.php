<?php
session_start();
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
        $password = $_POST['password']; // Do not hash the password here
        
        // Prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT email, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Check if the email exists in the database
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            
            // Verify the password
            if (password_verify($password, $row['password'])) { // Use hashed password from the database
                // Set session and redirect
                $_SESSION['statusNoti'] = "<p class='alert alert-success text-center mb-2' style='width: 30%; margin: 0 auto;'>You are successfully logged in!</p>";
                header("Location: ./paginas/login.php"); // Redirect to the correct page
                exit();
            } else {
                // Incorrect password
                $_SESSION['statusNoti'] = "<p class='alert alert-danger text-center mb-2' style='width: 30%; margin: 0 auto;'>Username or password is incorrect</p>";
                header("Location: ./paginas/login.php");
                exit();
            }
        } else {
            // Email not found
            $_SESSION['statusNoti'] = "<p class='alert alert-danger text-center mb-2' style='width: 30%; margin: 0 auto;'>Username or password is incorrect</p>";
            header("Location: ./paginas/login.php");
            exit();
        }
    }    


  if (isset($_POST['signup_submit'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $streetnameAndNr = $conn->real_escape_string($_POST['streetname']);
    $houseNrAddon = $conn->real_escape_string($_POST['houseaddition']);
    $postalcode = $conn->real_escape_string($_POST['postcode']);
    $city = $conn->real_escape_string($_POST['city']);
    $phonenumber = $conn->real_escape_string($_POST['phone']);


    if (strlen($email) < 4 AND strlen($password) < 4) {
        // Redirect back to signup.php with an error message
        $_SESSION['statusNoti'] = "<p class='alert alert-danger text-center mb-2' style='width: 30%; margin: 0 auto;'>Username or password is too short</p>";
        header("Location: ./paginas/createaccount.php");
        exit;
    }

    $sqlLogin = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sqlLogin);

    if ($result->num_rows > 0) {
        // Username already exists
        $_SESSION['statusNoti'] = "<p class='alert alert-danger text-center mb-2' style='width: 30%; margin: 0 auto;'>This e-mail already exists</p>";
        $_SESSION['account'] = [
            'loggedIn' => '0',
        ];

        header("Location: ./paginas/createaccount.php");
        exit;
    } else {
        // Prepare and bind the insert statement
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $admin = null;

        $stmt = $conn->prepare("INSERT INTO users (email, password, firstname, lastname, streetnameAndNr, houseNrAddon, postalcode, city, phonenumber, admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssii", $email, $hashedPassword, $firstname, $lastname, $streetnameAndNr, $houseNrAddon, $postalcode, $city, $phonenumber, $admin);

        // Execute the insert statement
        if ($stmt->execute()) {
            // Redirect to a success page or do something else
            $_SESSION['statusNoti'] = "<p class='alert alert-success text-center mb-2' style='width: 30%; margin: 0 auto;'>Account succesfully created!</p>";
            $_SESSION['account'] = [
                'loggedIn' => '1',
                'email' => $email,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'streetnameAndNr' => $streetnameAndNr,
                'houseNrAddon' => $houseNrAddon,
                'postalcode' => $postalcode,
                'city' => $city,
                'phonenumber' => $phonenumber,
            ];
            header("Location: ./paginas/createaccount.php");
            exit;
        } else {
            // Redirect back to signup.php with an error message
            $_SESSION['statusNoti'] = "Error: " . $conn->error;
            header("Location: ./paginas/createaccount.php");
            exit;
        }
    }
  }
}
?>