<?php

include("../functions.php");
htmlheader("Pizzeria Soprano's");
htmlnavbar();

?>




<div class="container">
    <div class="form-section">
        <div class="auth-card">
            <h2>Inloggen</h2>
            <form action="#" method="post">
                <div class="input-group">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Wachtwoord *</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Inloggen</button>
            </form>
        </div>
    </div>
    

<!-- partial -->
  <script  src="../scripts/script.js"></script>

</body>
</html>
