<?php

include("../functions.php");
require '../database.php';
htmlheader("Pizzeria Soprano's");
htmlnavbar();
$statusNoti = isset($_SESSION['statusNoti']) ? $_SESSION['statusNoti'] : '';
unset($_SESSION['statusNoti']);

?>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<div class="c_container">
  <h2>Aanmelden</h2>
  <?=$statusNoti?>
  <form action="../database.php" method="post">
    <div class="form-container">
      
      <!-- Left Block -->
      <div class="left-block">
        <div class="c_input-group">
          <label for="email">E-mail *</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="c_input-group">
          <label for="password">Wachtwoord *</label>
          <input type="password" id="password" name="password" required>
        </div>
        <!-- Submit button at the bottom of the left block -->
        <button type="submit" class="c_submit-btn" name="signup_submit">Aanmelden</button>
        <a href="./login.php">Heb je al een account?</a>
      </div>

      <!-- Right Block -->
      <div class="right-block">
        <div class="c_input-group">
          <label for="firstname">Voornaam *</label>
          <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="c_input-group">
          <label for="lastname">Achternaam *</label>
          <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="c_input-group">
          <label for="street">Straatnaam + Huisnummer</label>
          <input type="text" id="street" name="streetname">
          <label for="houseaddition" class="houseaddition-label">Huisnummertoevoeging</label>
          <input type="text" id="houseaddition" name="houseaddition" class="houseaddition-input">
        </div>
        <div class="c_input-group">
          <label for="postcode">Postcode</label>
          <input type="text" id="postcode" name="postcode">
        </div>
        <div class="c_input-group">
          <label for="city">Woonplaats</label>
          <input type="text" id="city" name="city">
        </div>
        <div class="c_input-group">
          <label for="phone">Telefoonnummer</label>
          <input type="text" id="phone" name="phone">
        </div>
      </div>
      
    </div>
  </form>
</div>



<!-- partial -->
  <script  src="../scripts/script.js"></script>

</body>
</html>
