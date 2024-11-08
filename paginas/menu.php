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
        <img src="../images/pizza-salamiTest.jpg" alt="Pizza Margherita">
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
        <img src="../images/pizza-salamiTest.jpg" alt="Vivaldi's Quatro Stagiani">
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
        <img src="../images/pizza-salamiTest.jpg" alt="Los Zetas Pizza">
        <h3>Los Zetas Pizza</h3>
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
        <img src="bed_pizza.jpg" alt="Bed Pizza">
        <h3>Bed Pizza</h3>
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
        <img src="fishes_pizza.jpg" alt="Fishes Pizza">
        <h3>Fishes Pizza</h3>
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
        <img src="special_pizza.jpg" alt="Special Pizza">
        <h3>Special Pizza</h3>
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

    <!-- Pasta Section -->
    <div class="product-card pasta">
        <img src="pasta_aglia_oglio.jpg" alt="Pasta Aglia e Oglio">
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
        <img src="random_pasta1.jpg" alt="Random Pasta 1">
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
        <img src="random_pasta2.jpg" alt="Random Pasta 2">
        <h3>Ravioli</h3>
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
        <img src="random_pasta3.jpg" alt="Random Pasta 3">
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
        <img src="random_pasta4.jpg" alt="Random Pasta 4">
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

    <!-- Other Products Section (Salad, Calzone, Sandwich) -->
    <div class="product-card salad">
        <img src="random_salad1.jpg" alt="Salad 1">
        <h3>Caesar Salade</h3>
        <p>Groene sla, tomaat</p>
        <div class="card-footer">
            <span class="price">4,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>
    
    <div class="product-card salad">
        <img src="random_salad2.jpg" alt="Salad 2">
        <h3>Tonijn Salade</h3>
        <p>Komkommer, tomaat</p>
        <div class="card-footer">
            <span class="price">7,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card salad">
        <img src="random_salad3.jpg" alt="Salad 3">
        <h3>Zalm Salade</h3>
        <p>Wortel, sla, tomaat</p>
        <div class="card-footer">
            <span class="price">5,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card salad">
        <img src="random_salad4.jpg" alt="Pastrami Salad">
        <h3>Pastrami Salade</h3>
        <p>Spinazie, sla, ui</p>
        <div class="card-footer">
            <span class="price">6,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card salad">
        <img src="random_salad5.jpg" alt="Mozzarella Salad">
        <h3>Mozzarella Salade</h3>
        <p>Sla, tomaat, komkommer</p>
        <div class="card-footer">
            <span class="price">4,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card salad">
        <img src="random_salad6.jpg" alt="Tomato Onion Salad">
        <h3>Tomaat en Ui Salade</h3>
        <p>Tomaat, ui, sla</p>
        <div class="card-footer">
            <span class="price">5,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <!-- Sandwich Section -->
    <div class="product-card sandwich">
        <img src="random_sandwich1.jpg" alt="Garlic Sandwich">
        <h3>Knoflook Brood</h3>
        <p>Knoflookbrood</p>
        <div class="card-footer">
            <span class="price">3,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich2.jpg" alt="Chicken Parmesan Sandwich">
        <h3>Kip Parmezaan</h3>
        <p>Ham, kaas, tomaat</p>
        <div class="card-footer">
            <span class="price">4,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich3.jpg" alt="Carpaccio Sandwich">
        <h3>Carpaccio</h3>
        <p>Kip, sla, tomaat</p>
        <div class="card-footer">
            <span class="price">4,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich4.jpg" alt="Tuna Sandwich">
        <h3>Tonijn Sandwich</h3>
        <p>Tonijn, sla</p>
        <div class="card-footer">
            <span class="price">4,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich5.jpg" alt="Smoked Salmon Sandwich">
        <h3>Gerookte Zalm</h3>
        <p>Kaas, sla, tomaat</p>
        <div class="card-footer">
            <span class="price">4,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="california_zonin.jpg" alt="California Zonin">
        <h3>California Zonin</h3>
        <p>Kaas, tomatensaus, groenten</p>
        <div class="card-footer">
            <span class="price">8,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="cals_calzone.jpg" alt="Cal's Calzone">
        <h3>Cal's Calzone</h3>
        <p>Kaas, tomatensaus, kip</p>
        <div class="card-footer">
            <span class="price">8,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="random_calzone1.jpg" alt="Salami Calzone">
        <h3>Salami</h3>
        <p>Kaas, tomatensaus, groenten</p>
        <div class="card-footer">
            <span class="price">7,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="random_calzone2.jpg" alt="Quattro Formaggi Calzone">
        <h3>Quattro Formaggi</h3>
        <p>Kaas, tomatensaus, vlees</p>
        <div class="card-footer">
            <span class="price">7,50€</span>
            <button class="add-btn">+</button>
        </div>
    </div>

    <div class="product-card calzone">
        <img src="random_calzone3.jpg" alt="Random Calzone 3">
        <h3>Random Calzone 3</h3>
        <p>Kaas, tomatensaus, champignons</p>
        <div class="card-footer">
            <span class="price">7,00€</span>
            <button class="add-btn">+</button>
        </div>
    </div>
</div>

<script src="../scripts/script.js"></script>
</body>
</html>