<?php

include("../functions.php");
require '../database.php';
htmlheader("Pizzeria Soprano's");
htmlnavbar();
$statusNoti = isset($_SESSION['statusNoti']) ? $_SESSION['statusNoti'] : '';
unset($_SESSION['statusNoti']);

?>

<div class="container">
    <div class="form-section">
        <div class="auth-card">
            <h2>Inloggen</h2>
            <?=$statusNoti?>
            <form action="../database.php" method="post">
                <div class="input-group">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Wachtwoord *</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn" name="login_submit">Inloggen</button><br>
                <a class="hreflink" href="./createaccount.php">Nog geen account</a>
            </form>
        </div>
    </div>
    

<!-- partial -->
  <script  src="../scripts/script.js"></script>

</body>
</html>
