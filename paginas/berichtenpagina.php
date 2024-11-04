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

    // Controleer of er een verzoek is om een bericht te verwijderen
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
        $delete_id = intval($_POST['delete_id']);

        // Verwijder het bericht met het opgegeven ID
        $delete_sql = "DELETE FROM contact WHERE id = $delete_id";

        if ($conn->query($delete_sql) === TRUE) {
            echo "<p class='alert alert-success'>Bericht met ID $delete_id is verwijderd.</p>";
        } else {
            echo "<p class='alert alert-danger'>Fout bij het verwijderen: " . $conn->error . "</p>";
        }
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
            <th>Actie</th> <!-- Nieuwe kolom voor Verwijder-knop -->
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
                echo "<td>";
                echo "<form method='POST' action='' style='display:inline;'>";
                echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "'>";
                echo "<button type='submit' class='btn btn-danger' onclick=\"return confirm('Weet je zeker dat je dit bericht wilt verwijderen?');\">Verwijder</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Geen contactberichten gevonden.</td></tr>";
        }

        // Sluit de verbinding
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
