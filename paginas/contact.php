<?php

include("../functions.php");

htmlcontact("Pizzeria Soprano's");
htmlnavbar();

?>

<section class="contact" id="contact">
    <div class="container">
        <div class="heading text-center">
            <h2>Contact <span>Us</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <!-- PHP-code voor formulierverwerking -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Databasegegevens
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pizzeriasopranos";

            // Maak verbinding met de database
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Controleer de verbinding
            if ($conn->connect_error) {
                die("Verbinding mislukt: " . $conn->connect_error);
            }

            // Haal gegevens op van het formulier en ontsmet deze
            $naam = $conn->real_escape_string($_POST['naam']);
            $email = $conn->real_escape_string($_POST['email']);
            $onderwerp = $conn->real_escape_string($_POST['onderwerp']);
            $bericht = $conn->real_escape_string($_POST['bericht']);

            // SQL-query om gegevens in te voegen
            $sql = "INSERT INTO contact (naam, email, onderwerp, bericht) VALUES ('$naam', '$email', '$onderwerp', '$bericht')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='alert alert-success text-center'>Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.</p>";
            } else {
                echo "<p class='alert alert-danger text-center'>Fout bij het opslaan van gegevens: " . $conn->error . "</p>";
            }

            // Sluit de verbinding
            $conn->close();
        }
        ?>

        <!-- HTML Formulier -->
        <div class="row">
            <div class="col-md-5">
                <div class="title">
                    <h3>Contact detail</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
                <div class="content">
                    <div class="info">
                        <i class="fas fa-mobile-alt"></i>
                        <h4 class="d-inline-block">TELEFOONNUMMER: <br><span>+12457836913 , +12457836913</span></h4>
                    </div>
                    <div class="info">
                        <i class="far fa-envelope"></i>
                        <h4 class="d-inline-block">EMAIL: <br><span>example@info.com</span></h4>
                    </div>
                    <div class="info">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4 class="d-inline-block">ADRES:<br><span>6743 last street , Abcd, Xyz</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="naam" placeholder="Naam" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="onderwerp" placeholder="Onderwerp" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="bericht" placeholder="Bericht" required></textarea>
                    </div>
                    <button class="btn btn-block" type="submit">Verzend nu!</button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
