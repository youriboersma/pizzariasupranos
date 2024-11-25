<?php

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