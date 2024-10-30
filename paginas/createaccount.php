<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Pizzeria Soprano's</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://kit.fontawesome.com/0399110f0f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./styling/style.css">

</head>
<body>
<!-- start navigation -->
<nav>
<span class="nav-button">☰</span>
<ul class="nav" role="navigation">
    <li class="burger-menu">
    <a href="#"><i class="fa-solid fa-bars"></i></a>
    <ul class="nav__sub">
        <li>
        <a href="#">Menu</a>
        </li>
        <li>
        <a href="#">Contact</a>
        </li>
        <li>
        <a href="#">About</a>
        </li>
    </ul>
    </li>
    <li class="home">
    <a class="home-image" href="./index.html"><img src="./images/sopranos.png" style="width: 240px;"></a>
    </li>
    <li class="cart">
    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
    </li>
    <li class="account">
    <a href="#"><i class="fa-solid fa-user"></i></a>    
    </li>
</ul>
</nav>

<div class="container">
    <div class="form-section">
        <h2>Aanmelden</h2>
        <form action="#" method="post">
            <!-- Left Block -->
            <div class="left-block">
                <div class="input-group">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Wachtwoord *</label>
                    <input type="password" id="password" name="password" required>
                </div>
            </div>

            <!-- Right Block -->
            <div class="right-block">
                <div class="input-group">
                    <label for="firstname">Voornaam *</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div class="input-group">
                    <label for="lastname">Achternaam *</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
                <div class="input-group">
                    <label for="street">Straatnaam + Huisnummer</label>
                    <input type="text" id="street" name="street">
                </div>
                <div class="input-group">
                    <label for="houseaddition">Huisnummertoevoeging</label>
                    <input type="text" id="houseaddition" name="houseaddition">
                </div>
                <div class="input-group">
                    <label for="postcode">Postcode</label>
                    <input type="text" id="postcode" name="postcode">
                </div>
                <div class="input-group">
                    <label for="city">Woonplaats</label>
                    <input type="text" id="city" name="city">
                </div>
                <div class="input-group">
                    <label for="signup-email">E-mail</label>
                    <input type="email" id="signup-email" name="signup-email">
                </div>
                <div class="input-group">
                    <label for="phone">Telefoonnummer</label>
                    <input type="text" id="phone" name="phone">
                </div>
            </div>
            <button type="submit" class="submit-btn">Aanmelden</button>
        </form>
    </div>
</div>


<!-- partial -->
  <script  src="./scripts/script.js"></script>

</body>
</html>
