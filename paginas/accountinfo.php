<?php

include("../functions.php");
require '../database.php';
htmlheader("Pizzeria Soprano's");
htmlnavbar();
print_r($_SESSION['account']);
?>
<body>

<div class="accountinfo_container">
    <h2>Account Info</h2>
    <div class="accountinfo_form-row">
        <div class="accountinfo_section">
            <h3>Adres</h3>
            <label>Straat + Huisnr</label>
            <input type="text" value="">
            <label>Land</label>
            <input type="text">
            <label>Postcode</label>
            <input type="text">
            <label>Stad</label>
            <input type="text">
        </div>
        <div class="accountinfo_section">
            <h3>Privé</h3>
            <label>Gebruikersnaam</label>
            <input type="text">
        </div>
        <div class="accountinfo_section">
            <h3>Persoon Info</h3>
            <label>Voornaam</label>
            <input type="text">
            <label>Achternaam</label>
            <input type="text">
            <label>Telefoonnummer</label>
            <input type="text">
            <label>Email-adres</label>
            <input type="email">
        </div>
    </div>
</div>

</body>