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
    <div class="product-card pizza">
        <img src="pizza-margherita.jpg" alt="Pizza Margherita">
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
        <img src="pizza_quatro_stagioni.jpg" alt="Vivaldi's Quatro Stagiani">
        <h3>Vivaldi’s Quatro Stagiani</h3>
        <p>Kaas, tomatensaus, groenten, ham</p>
        <select class="size-chooser">
            <option value="small">Small</option>
            <option value="medium" selected>Medium</option>
            <option value="large">Large</option>
            <option value="family">Family</option>
        </select>
        <span>7,00€</span>
    </div>

    <div class="product-card pizza">
        <img src="los_zetas_pizza.jpg" alt="Los Zetas Pizza">
        <h3>Los Zetas Pizza</h3>
        <p>Kaas, tomatensaus, jalapeno, vlees</p>
        <select class="size-chooser">
            <option value="small">Small</option>
            <option value="medium" selected>Medium</option>
            <option value="large">Large</option>
            <option value="family">Family</option>
        </select>
        <span>8,00€</span>
    </div>

    <div class="product-card pizza">
        <img src="bed_pizza.jpg" alt="Bed Pizza">
        <h3>Bed Pizza</h3>
        <p>Kaas, tomatensaus, champignons</p>
        <select class="size-chooser">
            <option value="small">Small</option>
            <option value="medium" selected>Medium</option>
            <option value="large">Large</option>
            <option value="family">Family</option>
        </select>
        <span>6,50€</span>
    </div>

    <div class="product-card pizza">
        <img src="fishes_pizza.jpg" alt="Fishes Pizza">
        <h3>Fishes Pizza</h3>
        <p>Kaas, tomatensaus, vis</p>
        <span>7,50€</span>
    </div>

    <div class="product-card pizza">
        <img src="special_pizza.jpg" alt="Special Pizza">
        <h3>Special Pizza</h3>
        <p>Kaas, tomatensaus, salami, paprika</p>
        <span>9,00€</span>
    </div>

    <div class="product-card calzone">
        <img src="california_zonin.jpg" alt="California Zonin">
        <h3>California Zonin</h3>
        <p>Kaas, tomatensaus, groenten</p>
        <span>8,00€</span>
    </div>

    <div class="product-card calzone">
        <img src="cals_calzone.jpg" alt="Cal's Calzone">
        <h3>Cal's Calzone</h3>
        <p>Kaas, tomatensaus, kip</p>
        <span>8,50€</span>
    </div>

    <div class="product-card calzone">
        <img src="random_calzone1.jpg" alt="Random Calzone 1">
        <h3>Salami</h3>
        <p>Kaas, tomatensaus, groenten</p>
        <span>7,00€</span>
    </div>

    <div class="product-card calzone">
        <img src="random_calzone2.jpg" alt="Random Calzone 2">
        <h3>Quattro Formaggi</h3>
        <p>Kaas, tomatensaus, vlees</p>
        <span>7,50€</span>
    </div>

    <div class="product-card calzone">
        <img src="random_calzone3.jpg" alt="Random Calzone 3">
        <h3>Random Calzone 3</h3>
        <p>Kaas, tomatensaus, champignons</p>
        <span>7,00€</span>
    </div>

    <div class="product-card pasta">
        <img src="pasta_aglia_oglio.jpg" alt="Pasta Aglia e Oglio">
        <h3>Pasta Aglia e Oglio</h3>
        <p>Olijfolie, knoflook</p>
        <select class="size-chooser">
            <option value="small">Penne</option>
            <option value="medium" selected>Medium</option>
            <option value="large">Large</option>
            <option value="family">Family</option>
        </select>
        <span>6,00€</span>
    </div>

    <div class="product-card pasta">
        <img src="random_pasta1.jpg" alt="Random Pasta 1">
        <h3>Carbonara</h3>
        <p>Pasta met saus en kaas</p>
        <span>7,50€</span>
    </div>

    <div class="product-card pasta">
        <img src="random_pasta2.jpg" alt="Random Pasta 2">
        <h3>Ravioli</h3>
        <p>Pasta met tomatensaus</p>
        <span>7,00€</span>
    </div>

    <div class="product-card pasta">
        <img src="random_pasta3.jpg" alt="Random Pasta 3">
        <h3>Pesto</h3>
        <p>Pasta met vlees</p>
        <span>8,00€</span>
    </div>

    <div class="product-card pasta">
        <img src="random_pasta4.jpg" alt="Random Pasta 4">
        <h3>Amatriciana</h3>
        <p>Pasta met kip</p>
        <span>7,50€</span>
    </div>

    <div class="product-card salad">
        <img src="random_salad1.jpg" alt="Salad 1">
        <h3>Caesar Salade</h3>
        <p>Groene sla, tomaat</p>
        <span>4,50€</span>
    </div>

    <div class="product-card salad">
        <img src="random_salad2.jpg" alt="Salad 2">
        <h3>Tonijn Salade</h3>
        <p>Komkommer, tomaat</p>
        <span>5,00€</span>
    </div>

    <div class="product-card salad">
        <img src="random_salad3.jpg" alt="Salad 3">
        <h3>Zalm Salade</h3>
        <p>Wortel, sla, tomaat</p>
        <span>5,50€</span>
    </div>

    <div class="product-card salad">
        <img src="random_salad4.jpg" alt="Salad 4">
        <h3>Pastrami Salade</h3>
        <p>Spinazie, sla, ui</p>
        <span>6,00€</span>
    </div>

    <div class="product-card salad">
        <img src="random_salad5.jpg" alt="Salad 5">
        <h3>Mozzarella Salade</h3>
        <p>Sla, tomaat, komkommer</p>
        <span>4,50€</span>
    </div>

    <div class="product-card salad">
        <img src="random_salad6.jpg" alt="Salad 6">
        <h3>Salad 6</h3>
        <p>Tomaat, ui, sla</p>
        <span>5,00€</span>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich1.jpg" alt="Garlic Sandwich">
        <h3>Knoflook</h3>
        <p>Knoflookbrood</p>
        <span>3,50€</span>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich2.jpg" alt="Random Sandwich 1">
        <h3>Kip parmezaan</h3>
        <p>Ham, kaas, tomaat</p>
        <span>4,00€</span>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich3.jpg" alt="Random Sandwich 2">
        <h3>Carpaccio</h3>
        <p>Kip, sla, tomaat</p>
        <span>4,50€</span>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich4.jpg" alt="Random Sandwich 3">
        <h3>Vlees</h3>
        <p>Tonijn, sla</p>
        <span>4,50€</span>
    </div>

    <div class="product-card sandwich">
        <img src="random_sandwich5.jpg" alt="Random Sandwich 4">
        <h3>Gerookte zalm</h3>
        <p>Kaas, sla, tomaat</p>
        <span>4,00€</span>
    </div>
</div>

<script src="../scripts/script.js"></script>
</body>
</html>