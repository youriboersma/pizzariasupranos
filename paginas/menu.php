<?php

include("../functions.php");

htmlheader("Pizzeria Soprano's");
htmlnavbar();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzeriasopranos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = ""; // Variable to store message

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_menu_item'])) {
    // Get and sanitize form inputs
    $itemName = $conn->real_escape_string(trim($_POST['itemName']));

    // Only check for 'grootte' if it's present in the form (e.g., for pasta, calzones)
    if (isset($_POST['grootte'])) {
        $grootte = $conn->real_escape_string(trim($_POST['grootte']));
    } else {
        // For items without a size chooser (e.g., salads, sandwiches), set 'grootte' to null
        $grootte = null;
    }

    // Check if required fields are filled (ensure itemName is always required)
    if (empty($itemName) || ($grootte === null && in_array($itemName, ['Pasta Aglia e Oglio', 'Carbonara', 'Kaas Ravioli', 'Pesto', 'Amatriciana', 'California Zonin', 'Cal\'s Calzone', 'Salami', 'Quattro Formaggi', 'Shoarma'])) ) {
        $message = "<p class='alert alert-danger text-center'>Vul alle velden in.</p>";
    } else {
        // Insert data into the menu table
        $sql = "INSERT INTO menu (itemName, grootte) VALUES ('$itemName', '$grootte')";

        if ($conn->query($sql) === TRUE) {
            $message = "<p class='alert alert-success text-center'>Item succesvol toegevoegd aan het menu!</p>";
        } else {
            $message = "<p class='alert alert-danger text-center'>Fout bij het opslaan: " . $conn->error . "</p>";
        }
    }
}

// Close the connection
$conn->close();

?>

<h1 style="text-align:center;">Menu</h1>

<div class="menu">
    <button class="menu-btn active" onclick="filterCategory('all')">All</button>
    <button class="menu-btn" onclick="filterCategory('pizza')">Pizza's</button>
    <button class="menu-btn" onclick="filterCategory('pasta')">Pasta</button>
    <button class="menu-btn" onclick="filterCategory('sandwich')">Broodjes</button>
    <button class="menu-btn" onclick="filterCategory('salad')">Salade</button>
    <button class="menu-btn" onclick="filterCategory('calzone')">Calzone</button>
    <button class="menu-btn" onclick="filterCategory('drinks')">Drinken</button>
</div>

<div class="product-grid">
    <!-- Pizza Margherita -->
    <div class="product-card pizza">
        <form action="menu.php" method="POST">
            <img src="../images/margherita.jpeg" alt="Pizza Margherita">
            <h3>Pizza Margherita</h3>
            <p>Kaas, tomatensaus, verse basilicum</p>
            <div class="card-footer">
                <span class="price" data-base-price="7">7,00€</span>
                <select class="size-chooser" name="grootte">
                    <option value="small">Small</option>
                    <option value="medium" selected>Medium</option>
                    <option value="large">Large</option>
                    <option value="family">Family</option>
                </select>
                <input type="hidden" name="itemName" value="Pizza Margherita">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <!-- Vivaldi's Quatro Stagiani -->
    <div class="product-card pizza">
        <form action="menu.php" method="POST">
            <img src="../images/quattro.jpg" alt="Vivaldi's Quatro Stagiani">
            <h3>Vivaldi’s Quatro Stagioni</h3>
            <p>Kaas, tomatensaus, champignons, artisjokken, ham, olijven</p>
            <div class="card-footer">
                <span class="price" data-base-price="7">7,00€</span>
                <select class="size-chooser" name="grootte">
                    <option value="small">Small</option>
                    <option value="medium" selected>Medium</option>
                    <option value="large">Large</option>
                    <option value="family">Family</option>
                </select>
                <input type="hidden" name="itemName" value="Vivaldi’s Quatro Stagioni">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <!-- Mexican Fiesta -->
    <div class="product-card pizza">
        <form action="menu.php" method="POST">
            <img src="../images/fiesta.jpg" alt="Mexican Fiesta">
            <h3>Mexican Fiesta</h3>
            <p>Kaas, tomatensaus, jalapeño, gekruid gehakt, maïs</p>
            <div class="card-footer">
                <span class="price" data-base-price="8">8,00€</span>
                <select class="size-chooser" name="grootte">
                    <option value="small">Small</option>
                    <option value="medium" selected>Medium</option>
                    <option value="large">Large</option>
                    <option value="family">Family</option>
                </select>
                <input type="hidden" name="itemName" value="Mexican Fiesta">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <!-- Chicken Kebab -->
    <div class="product-card pizza">
        <form action="menu.php" method="POST">
            <img src="../images/kebab.avif" alt="Chicken Kebab">
            <h3>Chicken Kebab</h3>
            <p>Kaas, tomatensaus, gegrilde kip, knoflooksaus</p>
            <div class="card-footer">
                <span class="price" data-base-price="6.5">6,50€</span>
                <select class="size-chooser" name="grootte">
                    <option value="small">Small</option>
                    <option value="medium" selected>Medium</option>
                    <option value="large">Large</option>
                    <option value="family">Family</option>
                </select>
                <input type="hidden" name="itemName" value="Chicken Kebab">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <!-- Veggie Pizza -->
    <div class="product-card pizza">
        <form action="menu.php" method="POST">
            <img src="../images/veggie.png" alt="Veggie Pizza">
            <h3>Veggi</h3>
            <p>Kaas, tomatensaus, paprika, champignons, olijven, uien</p>
            <div class="card-footer">
                <span class="price" data-base-price="7.5">7,50€</span>
                <select class="size-chooser" name="grootte">
                    <option value="small">Small</option>
                    <option value="medium" selected>Medium</option>
                    <option value="large">Large</option>
                    <option value="family">Family</option>
                </select>
                <input type="hidden" name="itemName" value="Veggi">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <!-- Caprese Pizza -->
    <div class="product-card pizza">
        <form action="menu.php" method="POST">
            <img src="../images/caprese.webp" alt="Caprese pizza">
            <h3>Caprese</h3>
            <p>Kaas, tomatensaus, mozzarella, verse tomaten, basilicum</p>
            <div class="card-footer">
                <span class="price" data-base-price="9">9,00€</span>
                <select class="size-chooser" name="grootte">
                    <option value="small">Small</option>
                    <option value="medium" selected>Medium</option>
                    <option value="large">Large</option>
                    <option value="family">Family</option>
                </select>
                <input type="hidden" name="itemName" value="Caprese">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card pizza custom-pizza">
        <img src="../images/dough.jpg" alt="Custom Pizza">
        <h3>Custom Pizza</h3>
        <p>Make your own pizza</p>
        <div class="card-footer">
            <span class="price" data-base-price="6"></span>
        </div>
    </div>

    <div class="product-card pasta">
        <form action="menu.php" method="POST">
            <img src="../images/aglia.jpeg" alt="Pasta Aglia e Oglio">
            <h3>Pasta Aglia e Oglio</h3>
            <p>Olijfolie, knoflook, chilipeper, peterselie</p>
            <div class="card-footer">
                <span class="price">7,00€</span>
                <select class="size-chooser" name="grootte">
                    <option value="Penne">Penne</option>
                    <option value="Spaghetti" selected>Spaghetti</option>
                    <option value="Tagliatelle">Tagliatelle</option>
                    <option value="Fusilli">Fusilli</option>
                </select>
                <input type="hidden" name="itemName" value="Pasta Aglia e Oglio">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card pasta">
        <form action="menu.php" method="POST">
            <img src="../images/carbo.jpg" alt="Carbonara">
            <h3>Carbonara</h3>
            <p>Spek, eieren, kaas, zwarte peper</p>
            <div class="card-footer">
                <span class="price">7,50€</span>
                <select class="size-chooser" name="grootte">
                    <option value="Penne">Penne</option>
                    <option value="Spaghetti" selected>Spaghetti</option>
                    <option value="Tagliatelle">Tagliatelle</option>
                    <option value="Fusilli">Fusilli</option>
                </select>
                <input type="hidden" name="itemName" value="Carbonara">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card pasta">
        <form action="menu.php" method="POST">
            <img src="../images/ravioli.jpg" alt="Kaas Ravioli">
            <h3>Kaas Ravioli</h3>
            <p>Gevulde pasta, ricotta, spinazie, tomatensaus</p>
            <div class="card-footer">
                <span class="price">7,00€</span>
                <select class="size-chooser" name="grootte">
                    <option value="Penne">Penne</option>
                    <option value="Spaghetti" selected>Spaghetti</option>
                    <option value="Tagliatelle">Tagliatelle</option>
                    <option value="Fusilli">Fusilli</option>
                </select>
                <input type="hidden" name="itemName" value="Kaas Ravioli">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card pasta">
        <form action="menu.php" method="POST">
            <img src="../images/pesto.webp" alt="Pesto">
            <h3>Pesto</h3>
            <p>Basilicumpesto, pijnboompitten, Parmezaanse kaas</p>
            <div class="card-footer">
                <span class="price">8,00€</span>
                <select class="size-chooser" name="grootte">
                    <option value="Penne">Penne</option>
                    <option value="Spaghetti" selected>Spaghetti</option>
                    <option value="Tagliatelle">Tagliatelle</option>
                    <option value="Fusilli">Fusilli</option>
                </select>
                <input type="hidden" name="itemName" value="Pesto">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card pasta">
        <form action="menu.php" method="POST">
            <img src="../images/amatriciana.webp" alt="Amatriciana">
            <h3>Amatriciana</h3>
            <p>Tomatensaus, guanciale, pecorino, chilipeper</p>
            <div class="card-footer">
                <span class="price">7,50€</span>
                <select class="size-chooser" name="grootte">
                    <option value="Penne">Penne</option>
                    <option value="Spaghetti" selected>Spaghetti</option>
                    <option value="Tagliatelle">Tagliatelle</option>
                    <option value="Fusilli">Fusilli</option>
                </select>
                <input type="hidden" name="itemName" value="Amatriciana">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>


    <!-- Salad section -->

    <div class="product-card salad">
        <form action="menu.php" method="POST">
            <img src="../images/caesar.webp" alt="Caesar Salade">
            <h3>Caesar Salade</h3>
            <p>Romaine sla, croutons, Parmezaanse kaas, Caesar-dressing</p>
            <div class="card-footer">
                <span class="price">4,50€</span>
                <input type="hidden" name="itemName" value="Caesar Salade">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card salad">
        <form action="menu.php" method="POST">
            <img src="../images/tonijn.jpg" alt="Tonijn Salade">
            <h3>Tonijn Salade</h3>
            <p>Tonijn, komkommer, tomaat, olijven</p>
            <div class="card-footer">
                <span class="price">7,00€</span>
                <input type="hidden" name="itemName" value="Tonijn Salade">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card salad">
        <form action="menu.php" method="POST">
            <img src="../images/zalm.jpg" alt="Zalm Salade">
            <h3>Zalm Salade</h3>
            <p>Gerookte zalm, gemengde sla, tomaat, avocado</p>
            <div class="card-footer">
                <span class="price">5,50€</span>
                <input type="hidden" name="itemName" value="Zalm Salade">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card salad">
        <form action="menu.php" method="POST">
            <img src="../images/pastrami.jpeg" alt="Pastrami Salade">
            <h3>Pastrami Salade</h3>
            <p>Pastrami, spinazie, rode ui, augurk</p>
            <div class="card-footer">
                <span class="price">6,00€</span>
                <input type="hidden" name="itemName" value="Pastrami Salade">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card salad">
        <form action="menu.php" method="POST">
            <img src="../images/mozza.jpg" alt="Mozzarella Salade">
            <h3>Mozzarella Salade</h3>
            <p>Buffelmozzarella, tomaat, basilicum</p>
            <div class="card-footer">
                <span class="price">4,50€</span>
                <input type="hidden" name="itemName" value="Mozzarella Salade">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card salad">
        <form action="menu.php" method="POST">
            <img src="../images/tomaat.jpg" alt="Tomaat en Ui Salade">
            <h3>Tomaat en Ui Salade</h3>
            <p>Tomaat, rode ui, rucola</p>
            <div class="card-footer">
                <span class="price">5,00€</span>
                <input type="hidden" name="itemName" value="Tomaat en Ui Salade">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <!-- Sandwich section -->

    <div class="product-card sandwich">
        <form action="menu.php" method="POST">
            <img src="../images/knof.jpg" alt="Garlic Sandwich">
            <h3>Knoflook Brood</h3>
            <p>Knoflookboter, vers gebakken brood</p>
            <div class="card-footer">
                <span class="price">3,50€</span>
                <input type="hidden" name="itemName" value="Knoflook Brood">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card sandwich">
        <form action="menu.php" method="POST">
            <img src="../images/kip.jpeg" alt="Chicken Parmesan Sandwich">
            <h3>Kip Parmezaan</h3>
            <p>Gegrilde kipfilet, Parmezaanse kaas, tomaat, basilicum</p>
            <div class="card-footer">
                <span class="price">4,00€</span>
                <input type="hidden" name="itemName" value="Kip Parmezaan">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card sandwich">
        <form action="menu.php" method="POST">
            <img src="../images/carpaccio.jpg" alt="Carpaccio Sandwich">
            <h3>Carpaccio</h3>
            <p>Dunne plakjes rundvlees, rucola, Parmezaanse kaas, truffelmayonaise</p>
            <div class="card-footer">
                <span class="price">4,50€</span>
                <input type="hidden" name="itemName" value="Carpaccio">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card sandwich">
        <form action="menu.php" method="POST">
            <img src="../images/tonijnb.jpg" alt="Tuna Sandwich">
            <h3>Tonijn Sandwich</h3>
            <p>Tonijnsalade, verse sla, komkommer</p>
            <div class="card-footer">
                <span class="price">4,50€</span>
                <input type="hidden" name="itemName" value="Tonijn Sandwich">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card sandwich">
        <form action="menu.php" method="POST">
            <img src="../images/zalmb.jpg" alt="Smoked Salmon Sandwich">
            <h3>Gerookte Zalm</h3>
            <p>Gerookte zalm, roomkaas, sla, tomaat</p>
            <div class="card-footer">
                <span class="price">4,00€</span>
                <input type="hidden" name="itemName" value="Gerookte Zalm">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <!-- Calzone Section -->

    <div class="product-card calzone">
        <form action="menu.php" method="POST">
            <img src="../images/cali.jpg" alt="California Calzone">
            <h3>California Zonin</h3>
            <p>Smeltende kaas, tomatensaus, verse groenten</p>
            <div class="card-footer">
                <span class="price">8,00€</span>
                <input type="hidden" name="itemName" value="California Zonin">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card calzone">
        <form action="menu.php" method="POST">
            <img src="../images/cal.jpg" alt="Cal's Calzone">
            <h3>Cal's Calzone</h3>
            <p>Kaas, tomatensaus, gegrilde kip, paprika</p>
            <div class="card-footer">
                <span class="price">8,50€</span>
                <input type="hidden" name="itemName" value="Cal's Calzone">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card calzone">
        <form action="menu.php" method="POST">
            <img src="../images/salami.webp" alt="Salami Calzone">
            <h3>Salami</h3>
            <p>Kaas, tomatensaus, salami, verse basilicum</p>
            <div class="card-footer">
                <span class="price">7,00€</span>
                <input type="hidden" name="itemName" value="Salami">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card calzone">
        <form action="menu.php" method="POST">
            <img src="../images/formaggi.webp" alt="Quattro Formaggi Calzone">
            <h3>Quattro Formaggi</h3>
            <p>Vier soorten kaas, tomatensaus, knoflook</p>
            <div class="card-footer">
                <span class="price">7,50€</span>
                <input type="hidden" name="itemName" value="Quattro Formaggi">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card calzone">
        <form action="menu.php" method="POST">
            <img src="../images/shoarma.webp" alt="Shoarma Calzone">
            <h3>Shoarma</h3>
            <p>Kaas, tomatensaus, gekruide shoarmavlees, champignons</p>
            <div class="card-footer">
                <span class="price">7,00€</span>
                <input type="hidden" name="itemName" value="Shoarma">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <!-- Drinks Section -->

    <div class="product-card drinks">
        <form action="menu.php" method="POST">
            <img src="../images/cola.webp" alt="Coca Cola">
            <h3>Coca Cola</h3>
            <p>Verfrissende cola, 330ml</p>
            <div class="card-footer">
                <span class="price">8,00€</span>
                <input type="hidden" name="itemName" value="Coca Cola">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card drinks">
        <form action="menu.php" method="POST">
            <img src="../images/lipton.avif" alt="Lipton Ice Tea">
            <h3>Lipton Ice Tea</h3>
            <p>Heerlijke ijsthee, 330ml</p>
            <div class="card-footer">
                <span class="price">8,00€</span>
                <input type="hidden" name="itemName" value="Lipton Ice Tea">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card drinks">
        <form action="menu.php" method="POST">
            <img src="../images/green.jpg" alt="Lipton Green Ice Tea">
            <h3>Lipton Ice Tea Green</h3>
            <p>Groene ijsthee, 330ml</p>
            <div class="card-footer">
                <span class="price">8,00€</span>
                <input type="hidden" name="itemName" value="Lipton Ice Tea Green">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card drinks">
        <form action="menu.php" method="POST">
            <img src="../images/fanta.png" alt="Fanta Orange">
            <h3>Fanta Orange</h3>
            <p>Fruitige sinaasappeldrank, 330ml</p>
            <div class="card-footer">
                <span class="price">8,00€</span>
                <input type="hidden" name="itemName" value="Fanta Orange">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card drinks">
        <form action="menu.php" method="POST">
            <img src="../images/red.jpg" alt="Red Bull">
            <h3>Red Bull</h3>
            <p>Energiedrank, 250ml</p>
            <div class="card-footer">
                <span class="price">8,00€</span>
                <input type="hidden" name="itemName" value="Red Bull">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

    <div class="product-card drinks">
        <form action="menu.php" method="POST">
            <img src="../images/alfa.webp" alt="Alfa">
            <h3>Alfa Bier</h3>
            <p>12-pack, 500ml per fles</p>
            <div class="card-footer">
                <span class="price">8,00€</span>
                <input type="hidden" name="itemName" value="Alfa Bier">
                <button class="add-btn" type="submit" name="add_menu_item">+</button>
            </div>
        </form>
    </div>

</div>
<div id="pizzaModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>

        <!-- Left Section: Pizza Image -->
        <div class="modal-left">
            <img id="pizzaModalImage" src="" alt="Pizza Image">
        </div>

        <!-- Middle Section: Pizza Information -->
        <div class="modal-middle">
            <h3 id="pizzaModalTitle">Pizza Title</h3>
            <p id="pizzaModalDescription">Ingredients and details about the pizza will appear here.</p>
        </div>

        <!-- Right Section: Options and Cart -->
        <div class="modal-right">
            <h4>Select Size:</h4>
            <select class="size-chooser" id="pizzaSizeChooser">
                <option value="6.00">Small - 6,00€</option>
                <option value="8.00" selected>Medium - 8,00€</option>
                <option value="10.00">Large - 10,00€</option>
                <option value="12.00">Family - 12,00€</option>
            </select>

            <h4>Extras:</h4>
            <div class="toppings-extra">
                <label><input type="checkbox" id="extraCheese" value="0.50"> Extra Cheese (+0.50€)</label><br>
                <label><input type="checkbox" id="extraSalami" value="0.50"> Extra Salami (+0.50€)</label><br>
                <label><input type="checkbox" id="extraSauce" value="0.50"> Extra Sauce (+0.50€)</label><br><br>
            </div>
            <button class="modal-add-btn" onclick="addToCart()">Add to Cart</button>
            <p>Total: <span id="totalPrice">8.00€</span></p>
        </div>
    </div>
</div>
<div id="customPizzaModal" class="modal">
    <div class="modal-content large-modal">
        <span class="close" onclick="closeCustomPizzaModal()">&times;</span>
        <h2>Bouw je eigen pizza</h2>
        <p>Selecteer je eigen ingredienten elke topping kost 0.50€</p>
        <div class="modal-body custom-pizza-layout">
            <!-- Toppings Section (Left and Middle) -->
            <div class="toppings-container">
                <h3>Selecteer je ingredienten</h3> 
                <div class="toppings-list">
                    <label><input type="checkbox" value="Cheese" data-price="0.50"> Cheese</label>
                    <label><input type="checkbox" value="Pepperoni" data-price="0.50"> Pepperoni</label>
                    <label><input type="checkbox" value="Mushrooms" data-price="0.50"> Mushrooms</label>
                    <label><input type="checkbox" value="Onions" data-price="0.50"> Onions</label>
                    <label><input type="checkbox" value="Olives" data-price="0.50"> Olives</label>
                    <label><input type="checkbox" value="Bacon" data-price="0.50"> Bacon</label>
                    <label><input type="checkbox" value="Green Peppers" data-price="0.50"> Green Peppers</label>
                    <label><input type="checkbox" value="Jalapenos" data-price="0.50"> Jalapenos</label>
                    <label><input type="checkbox" value="Chicken" data-price="0.50"> Chicken</label>
                    <label><input type="checkbox" value="Spinach" data-price="0.50"> Spinach</label>
                    <label><input type="checkbox" value="Pineapple" data-price="0.50"> Pineapple</label>
                    <label><input type="checkbox" value="Tomatoes" data-price="0.50"> Tomatoes</label>
                </div>
            </div>

            <!-- Size, Price, and Add-to-Cart Section (Right) -->
            <div class="order-section">
                <div class="size-section">
                    <h3>Select Pizza Size</h3>
                    <select class="size-chooser" id="customPizzaSize" onchange="calculateCustomPizzaPrice()">
                        <option value="small" data-price="6.00">Small - 6,00€</option>
                        <option value="medium" data-price="8.00" selected>Medium - 8,00€</option>
                        <option value="large" data-price="10.00">Large - 10,00€</option>
                        <option value="family" data-price="12.00">Family - 12,00€</option>
                    </select>
                </div>
                <div class="price-section">
                    <h3>Total Price:</h3>
                    <p id="customPizzaTotal">8.00€</p>
                </div>
                <button class="modal-add-btn" onclick="addCustomPizzaToCart()">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<script src="../scripts/script.js"></script>

<!-- Add this to your HTML, just before the closing </body> tag -->

<?php if (!empty($message)) { ?>
    <!-- Display the message dynamically -->
    <div id="popup-message" class="popup-message">
        <?php echo $message; ?>
    </div>

    <script>
        // Automatically hide the message after 3 seconds
        setTimeout(function() {
            var messageBox = document.getElementById("popup-message");
            messageBox.style.display = "none";
        }, 3000); // 3000 ms = 3 seconds
    </script>
<?php } ?>
</body>
</html>