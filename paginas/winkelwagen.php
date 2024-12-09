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
}
include("../functions.php");

htmlheader("Pizzeria Soprano's");
htmlnavbar();

?>

<h1 style="text-align: center">Winkelwagen</h1>

 <!--Start Grid container-->
<div class="form-grid-container">
    <div class="sugestions">
        <h2>Misschien vindt je dit ook lekker</h2><br><br>
        <div class="grid-item">Test</div>
        <div class="grid-item">Test</div>
        <div class="grid-item">Test</div>
        <div class="grid-item">Test</div>
    </div>

 <!--Informatie formulier-->
    <div class="information">
        <form>
            <label for="voornaam">Voornaam</label>
            <input type="text" id="voornaam" name="voornaam" class="form-field"><br>

            <label for="achternaam">Achternaam</label>
            <input type="text" id="achternaam" name="achternaam" class="form-field"><br>

            <label for="straatnaam&huisnummer">Straatnaam + Huisnummer</label>
            <input type="text" id="straatnaam&huisnummer" name="straatnaam&huisnummer" class="form-field"><br>

            <label for="huisnummertoevoeging">Huisnummertoevoeging</label>
            <input type="text" id="huisnummertoevoeging" name="huisnummertoevoeging" class="form-field"><br>

            <label for="postcode">Postcode</label>
            <input type="text" id="postcode" name="postcode" class="form-field"><br>

            <label for="woonplaats">Woonplaats</label>
            <input type="text" id="woonplaats" name="woonplaats" class="form-field"><br>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-field"><br>

            <label for="telefoonnummer">Telefoonnummer</label>
            <input type="tel" id="telefoonnummer" name="telefoonnummer" class="form-field"><br>

            <label for="locatiepizzeria">Locatie pizzeria</label>
            <input type="text" id="locatiepizzeria" name="locatiepizzeria" class="form-field">
        </form>
    </div>

    <div class="order">
        <form>
            <h2 class="details-order">Details bestelling</h2>

        <div class="item-list">
            <ul>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
            </ul>
        </div>
            <button type="submit" class="bestellen">Bestellen</button>
        </form>
    </div>
</div>
<!--Einde grid container-->


</body>
</html>