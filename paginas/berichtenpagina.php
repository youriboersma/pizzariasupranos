<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overzicht van Contactberichten</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://kit.fontawesome.com/0399110f0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styling/style.css">
</head>
<header>
    <nav>
        <span class="nav-button"></span>
        <ul class="nav" role="navigation">
            <li class="burger-menu">
                <a href="#"><i class="fa-solid fa-bars"></i></a>
                <ul class="nav__sub">
                    <li><a href="../paginas/menu.html">Menu</a></li>
                    <li><a href="../paginas/contact.php">Contact</a></li>
                    <li><a href="../paginas/about.html">About</a></li>
                </ul>
            </li>
            <li class="home">
                <a class="home-image" href="../index.html"><img src="../images/sopranos.png" style="width: 240px;"></a>
            </li>
            <li class="cart"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
            <li class="account"><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>
</header>
<body>

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
