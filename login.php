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
    <a class="home-image" href="index.html"><img src="./images/sopranos.png" style="width: 240px;"></a>
    </li>
    <li class="cart">
    <a href="Winkelwagen"><i class="fa-solid fa-cart-shopping"></i></a>
    </li>
    <li class="account">
    <a href="#"><i class="fa-solid fa-user"></i></a>    
    </li>
</ul>
</nav>

<div class="login-container"></div>
  <h2>INLOGGEN</h2>
  <form>
    <div class="input-group">
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="input-group">
      <label for="password">Wachtwoord</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" class="login-btn">Aanmelden</button>
  </form>
</div>
<!-- partial -->
  <script  src="./scripts/script.js"></script>

</body>
</html>
