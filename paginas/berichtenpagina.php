<?php

include("../functions.php");
htmlberichten("");
htmlnavbar();

?>

<div class="container">
    <h2 class="mt-4">Overzicht van Contactberichten</h2>

    <?php
    // Databaseverbinding instellen
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pizzeriasopranos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controleer de verbinding
    if ($conn->connect_error) {
        die("Verbinding mislukt: " . $conn->connect_error);
    }

    // SQL-query om gegevens op te halen
    $sql = "SELECT id, naam, email, onderwerp, bericht FROM contact";
    $result = $conn->query($sql);
    ?>

    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Onderwerp</th>
            <th>Bericht</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Controleer of er resultaten zijn
        if ($result->num_rows > 0) {
            // Doorloop elke rij en geef de gegevens weer in de tabel
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['naam']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['onderwerp']) . "</td>";
                echo "<td>" . htmlspecialchars($row['bericht']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Geen contactberichten gevonden.</td></tr>";
        }

        // Sluit de verbinding
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
