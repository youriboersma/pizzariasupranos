<?php

include("../functions.php");

htmlheader("Pizzeria Soprano's");
htmlnavbar();

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
    <!-- Pizza Section -->
    <div class="product-card pizza">
        <img src="../images/margherita.jpeg" alt="Pizza Margherita">
        <h3>Pizza Margherita</h3>
        <p>Kaas, tomatensaus</p>
        <div class="card-footer">
            <span class="price" data-base-price="7">7,00€</span>
            <select class="size-chooser" onchange="updatePrice(this)">
                <option value="small">Small</option>
                <option value="medium" selected>Medium</option>
                <option value="large">Large</option>
                <option value="family">Family</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pizza">
        <img src="../images/quattro.jpg" alt="Vivaldi's Quatro Stagiani">
        <h3>Vivaldi’s Quatro Stagiani</h3>
        <p>Kaas, tomatensaus, groenten, ham</p>
        <div class="card-footer">
            <span class="price" data-base-price="7">7,00€</span>
            <select class="size-chooser" onchange="updatePrice(this)">
                <option value="small">Small</option>
                <option value="medium" selected>Medium</option>
                <option value="large">Large</option>
                <option value="family">Family</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pizza">
        <img src="../images/fiesta.jpg" alt="Mexican Fiesta">
        <h3>Mexican Fiesta</h3>
        <p>Kaas, tomatensaus, jalapeno, vlees</p>
        <div class="card-footer">
            <span class="price" data-base-price="8">8,00€</span>
            <select class="size-chooser" onchange="updatePrice(this)">
                <option value="small">Small</option>
                <option value="medium" selected>Medium</option>
                <option value="large">Large</option>
                <option value="family">Family</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pizza">
        <img src="../images/kebab.avif" alt="Chicken Kebab">
        <h3>Chicken Kebab</h3>
        <p>Kaas, tomatensaus, champignons</p>
        <div class="card-footer">
            <span class="price" data-base-price="6.5">6,50€</span>
            <select class="size-chooser" onchange="updatePrice(this)">
                <option value="small">Small</option>
                <option value="medium" selected>Medium</option>
                <option value="large">Large</option>
                <option value="family">Family</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pizza">
        <img src="../images/veggie.png" alt="Veggie Pizza">
        <h3>Veggi</h3>
        <p>Kaas, tomatensaus, vis</p>
        <div class="card-footer">
            <span class="price" data-base-price="7.5">7,50€</span>
            <select class="size-chooser" onchange="updatePrice(this)">
                <option value="small">Small</option>
                <option value="medium" selected>Medium</option>
                <option value="large">Large</option>
                <option value="family">Family</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pizza">
        <img src="../images/caprese.webp" alt="Caprese pizza">
        <h3>Caprese</h3>
        <p>Kaas, tomatensaus, salami, paprika</p>
        <div class="card-footer">
            <span class="price" data-base-price="9">9,00€</span>
            <select class="size-chooser" onchange="updatePrice(this)">
                <option value="small">Small</option>
                <option value="medium" selected>Medium</option>
                <option value="large">Large</option>
                <option value="family">Family</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pizza custom-pizza">
    <img src="../images/dough.jpg" alt="Custom Pizza">
    <h3>Custom Pizza</h3>
    <p>Make your own pizza</p>
    <div class="card-footer">
        <span class="price" data-base-price="6"></span>
    </div>
    </div>

    <!-- Pasta Section -->
    <div class="product-card pasta">
        <img src="../images/aglia.jpeg" alt="Pasta Aglia e Oglio">
        <h3>Pasta Aglia e Oglio</h3>
        <p>Olijfolie, knoflook</p>
        <div class="card-footer">
            <span class="price">7,00€</span>
            <select class="size-chooser">
                <option value="small">Penne</option>
                <option value="medium" selected>Spagetti</option>
                <option value="large">tagliatelle</option>
                <option value="family">fusilli</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pasta">
        <img src="../images/carbo.jpg" alt="Random Pasta 1">
        <h3>Carbonara</h3>
        <p>Pasta met saus en kaas</p>
        <div class="card-footer">
            <span class="price">7,50€</span>
            <select class="size-chooser">
                <option value="small">Penne</option>
                <option value="medium" selected>Spagetti</option>
                <option value="large">tagliatelle</option>
                <option value="family">fusilli</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pasta">
        <img src="../images/ravioli.jpg" alt="Random Pasta 2">
        <h3>Kaas Ravioli</h3>
        <p>Pasta met tomatensaus</p>
        <div class="card-footer">
            <span class="price">7,00€</span>
            <select class="size-chooser">
                <option value="small">Penne</option>
                <option value="medium" selected>Spagetti</option>
                <option value="large">tagliatelle</option>
                <option value="family">fusilli</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pasta">
        <img src="../images/pesto.webp" alt="Random Pasta 3">
        <h3>Pesto</h3>
        <p>Pasta met vlees</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <select class="size-chooser">
                <option value="small">Penne</option>
                <option value="medium" selected>Spagetti</option>
                <option value="large">tagliatelle</option>
                <option value="family">fusilli</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card pasta">
        <img src="../images/amatriciana.webp" alt="Random Pasta 4">
        <h3>Amatriciana</h3>
        <p>Pasta met kip</p>
        <div class="card-footer">
            <span class="price">7,50€</span>
            <select class="size-chooser">
                <option value="small">Penne</option>
                <option value="medium" selected>Spagetti</option>
                <option value="large">tagliatelle</option>
                <option value="family">fusilli</option>
            </select>
            <button class="add-btn">+</button>
        </div>
    </div>


    <!-- Salad section -->

    <div class="product-card salad">
        <img src="../images/caesar.webp" alt="Salad 1">
        <h3>Caesar Salade</h3>
        <p>Groene sla, tomaat</p>
        <div class="card-footer">
            <span class="price">4,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>
    
    <div class="product-card salad">
        <img src="../images/tonijn.jpg" alt="Salad 2">
        <h3>Tonijn Salade</h3>
        <p>Komkommer, tomaat</p>
        <div class="card-footer">
            <span class="price">7,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card salad">
        <img src="../images/zalm.jpg" alt="Salad 3">
        <h3>Zalm Salade</h3>
        <p>Wortel, sla, tomaat</p>
        <div class="card-footer">
            <span class="price">5,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card salad">
        <img src="../images/pastrami.jpeg" alt="Pastrami Salad">
        <h3>Pastrami Salade</h3>
        <p>Spinazie, sla, ui</p>
        <div class="card-footer">
            <span class="price">6,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card salad">
        <img src="../images/mozza.jpg" alt="Mozzarella Salad">
        <h3>Mozzarella Salade</h3>
        <p>Sla, tomaat, komkommer</p>
        <div class="card-footer">
            <span class="price">4,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card salad">
        <img src="../images/tomaat.jpg" alt="Tomato Onion Salad">
        <h3>Tomaat en Ui Salade</h3>
        <p>Tomaat, ui, sla</p>
        <div class="card-footer">
            <span class="price">5,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>


    <!-- Sandwich Section -->

    <div class="product-card sandwich">
        <img src="../images/knof.jpg" alt="Garlic Sandwich">
        <h3>Knoflook Brood</h3>
        <p>Knoflookbrood</p>
        <div class="card-footer">
            <span class="price">3,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card sandwich">
        <img src="../images/kip.jpeg" alt="Chicken Parmesan Sandwich">
        <h3>Kip Parmezaan</h3>
        <p>Ham, kaas, tomaat</p>
        <div class="card-footer">
            <span class="price">4,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card sandwich">
        <img src="../images/carpaccio.jpg" alt="Carpaccio Sandwich">
        <h3>Carpaccio</h3>
        <p>Kip, sla, tomaat</p>
        <div class="card-footer">
            <span class="price">4,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card sandwich">
        <img src="../images/tonijnb.jpg" alt="Tuna Sandwich">
        <h3>Tonijn Sandwich</h3>
        <p>Tonijn, sla</p>
        <div class="card-footer">
            <span class="price">4,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card sandwich">
        <img src="../images/zalmb.jpg" alt="Smoked Salmon Sandwich">
        <h3>Gerookte Zalm</h3>
        <p>Kaas, sla, tomaat</p>
        <div class="card-footer">
            <span class="price">4,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>


    <!-- Calzone Section -->

    <div class="product-card calzone">
        <img src="../images/cali.jpg" alt="Cali club sandwich">
        <h3>California Zonin</h3>
        <p>Kaas, tomatensaus, groenten</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="../images/cal.jpg" alt="Cal's Calzone">
        <h3>Cal's Calzone</h3>
        <p>Kaas, tomatensaus, kip</p>
        <div class="card-footer">
            <span class="price">8,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="../images/salami.webp" alt="Salami Calzone">
        <h3>Salami</h3>
        <p>Kaas, tomatensaus, groenten</p>
        <div class="card-footer">
            <span class="price">7,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="../images/formaggi.webp" alt="Quattro Formaggi Calzone">
        <h3>Quattro Formaggi</h3>
        <p>Kaas, tomatensaus, vlees</p>
        <div class="card-footer">
            <span class="price">7,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="../images/shoarma.webp" alt="Random Calzone 3">
        <h3>Shoarma</h3>
        <p>Kaas, tomatensaus, champignons</p>
        <div class="card-footer">
            <span class="price">7,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>


    <!-- Drinks Section -->

    <div class="product-card drinks">
        <img src="../images/cola.webp" alt="Cola">
        <h3>Coca Cola</h3>
        <p>330ml</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>


    <div class="product-card drinks">
        <img src="../images/lipton.avif" alt="Lipton ice tea">
        <h3>Lipton ice tea</h3>
        <p>330ml</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card drinks">
        <img src="../images/green.jpg" alt="Lipton green ice tea">
        <h3>lipton ice tea green</h3>
        <p>330ml</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card drinks">
        <img src="../images/fanta.png" alt="Fanta">
        <h3>Fanta orange</h3>
        <p>330ml</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card drinks">
        <img src="../images/red.jpg" alt="Red Bull">
        <h3>Red Bull</h3>
        <p>250ml</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card drinks">
        <img src="../images/alfa.webp" alt="Alfa">
        <h3>Alfa</h3>
        <p>12 x 500ml</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <button class="add-btn">+</button>
        </div>
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
                <option value="small">Small - 3.00€</option>
                <option value="medium" selected>Medium - 5.00€</option>
                <option value="large">Large - 8.00€</option>
                <option value="family">Family - 11.00€</option>
            </select>

            <h4>Extras:</h4>
            <label><input type="checkbox" id="extraCheese" value="2.5"> Extra Cheese (+2.5€)</label><br>
            <label><input type="checkbox" id="extraSalami" value="2.5"> Extra Salami (+2.5€)</label><br>
            <label><input type="checkbox" id="extraSauce" value="2.5"> Extra Sauce (+2.5€)</label><br><br>

            <button class="modal-add-btn" onclick="addToCart()">Add to Cart</button>
            <p>Total: <span id="totalPrice">7,00€</span></p>
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
</body>
</html>